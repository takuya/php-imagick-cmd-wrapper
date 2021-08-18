<?php

namespace SystemUtil;


class ComandWrapper {

  public static $command_path;
  protected $opts = [];
  protected $args = [];
  public function __construct () {
  }
  
  /**
   * @param $arg
   */
  protected function addArg($arg){
    $this->args[] = $arg;
  }
  protected function addOpt( ...$opt ) {
    $this->opts[] = $opt;
    return $this;
  }
  public function execute(){
    $ret = self::exec( ...$this->opts);
    return $ret;
  }
  protected static function exec(...$args): array {
    $args = static::genArgs($args);
    $proc = new Process( $args );
    $proc->run();
    //var_dump(join(' ', $proc->getCommandLine()));
    return [$proc->getExitCode(), $proc->getOutput(), $proc->getErrorOutput()];
  }
  protected static function genArgs($args): array {
    $cmd = preg_split('/\s+/', static::$command_path);
    $args = array_merge( [], $cmd, ...[$args] );
    $args = array_filter($args,'trim');
    return $args;
  }
  
}