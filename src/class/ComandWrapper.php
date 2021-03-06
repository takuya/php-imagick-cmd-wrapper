<?php

namespace SystemUtil;


class ComandWrapper {

  public static $command_path;
  protected static $command_exists;
  protected $input_stream = null;

  protected $opts = [];
  public function __construct () {
    $this->is_cmd_exists();
    
  }
  protected function is_cmd_exists(){
    
    if ( is_null(static::$command_exists)){
      $proc = new Process( ['which',static::$command_path] );
      $proc->run();
      if (!$proc->isSuccessful()){
        static::$command_exists = false;
      }
    }
    
    if (static::$command_exists===false){
      throw  new \RuntimeException('command not found; apt install imagemagick');
    }
  }
  
  protected function addOpt( ...$opt ) {
    $this->opts[] = $opt;
    return $this;
  }
  
  /**
   * @throws \Exception
   */
  public function execute(){
    return $this->exec( ...$this->opts);
  }
  
  /**
   * @throws \Exception
   */
  protected function exec( ...$args): array {
    $args = static::genArgs($args);
    $proc = new Process( $args );
    $proc->setInput(!empty($this->input_stream)?$this->input_stream:null);
    $proc->run();
    //dd(join(' ', $proc->getCommandLine()));
    return [$proc->getExitCode(), $proc->getOutput(), $proc->getErrorOutput()];
  }
  protected function genArgs($args): array {
    $cmd = preg_split('/\s+/', static::$command_path);
    $args = array_merge( [], $cmd, ...[$args] );
    $args = array_filter($args,'trim');
    return $args;
  }
  
}