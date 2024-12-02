<?php

use Illuminate\Support\Str;
use SystemUtil\CommandWrapper;
use Nette\PhpGenerator\ClassType;
use CodeGen\ImageMagickHelpParser;

require __DIR__.DIRECTORY_SEPARATOR.'../vendor/autoload.php';

function main($argv, $argc) {
  
  if (! sizeof($argv)>0){
    echo "Usage: \n";
    echo 'php '.basename(__FILE__)." command\n";
    return;
  }
  
  
  $cmd = $argv[0];
  
  
  $ret = `which $cmd 2>/dev/null`;
  if (!$ret){
    echo "command ${cmd} not found\n";
    exit(2);
  }
  echo "Create Class(Trait) from ".$cmd."\n";
  ImageMagickHelpParser::createClassFromHelp($cmd);

}


///
///
if (  realpath($argv[0]) == __FILE__){
  array_shift($argv);
  main($argv,sizeof($argv));
}
