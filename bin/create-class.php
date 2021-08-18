<?php

use Illuminate\Support\Str;

require __DIR__.DIRECTORY_SEPARATOR.'../vendor/autoload.php';


function options(){
  $ret = ConvertCommand::exec( '-h' );
  $out = $ret[1];
  
  $lines = preg_split( '/\n/', $out );
  $ret = [];
  
  foreach ($lines as $idx => $line){
    if (!preg_match('/^\s{2}-[A-z]/',$line)){
      continue;
    }
    
    for ( $k=1;$k<5;$k++){
      $next = $lines[$idx+$k] ?? '';
      if ( preg_match('/(^\s{2}-[A-z])|(^[A-z])/',$next) ){
        break;
      }
      $next= preg_replace('/^\s+/', ' ', $next);
      $line = $line.$next;
    }
    $ret[]=$line;
  
  }
  
  $ret = collect( $ret )
    ->filter( function( $e ) { return preg_match( '/-[a-z]+/', $e ); } )
    ->map(function($e){
      $ret = preg_match( '/\s+-([-A-z]+) ([A-z]*)\s*([-|A-z\s]*)/', $e, $m );
      $m["-1"] = $e;
      return $m;
    })
    ->map(function($e){
      return [
        "name" => $e[1],
        "arg"  => $e[2]??null,
        "comm" => $e[3]??null,
        "orig" => $e["-1"]
      ];
    })
    ->toArray();
  return $ret;
}
$opts  = options();

$class = new Nette\PhpGenerator\ClassType('Convert');

foreach ( $opts as $e ) {
  $name  = preg_replace('/-/','_', $e['name']);
  $name = Str::camel($name);
  $method = $class->addMethod($name);
  $method->addComment($e['comm']);
  if ( $e['arg']){
    $method->addParameter($e["arg"]);
    $method->addBody("return \$this->addOpt('-{$e['name']}', \${$e["arg"]} );");
  
    $method->addComment("@param {$e['arg']}");
  }else {
    $method->addBody( "return \$this->addOpt('-{$e['name']}');" );
  }
}

$prefix = '<?php


namespace SystemUtil;

';
file_put_contents(__DIR__.'/../src/ConvertTemplate.php', $prefix.$class);

