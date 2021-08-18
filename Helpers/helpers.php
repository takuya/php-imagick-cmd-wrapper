<?php


function dd ( ...$args ) {
  //var_dump(debug_backtrace());
  dump( ...$args );
  exit;
}

;

function dump ( ...$args ) {
  foreach ( func_get_args() as $e ) {
    var_dump( $e );
  }
}

;

function ascii_letters(){
  $ascii_letters = array_map(function($e){return chr($e);},array_merge(range(65,90),range(97,122)));
  return $ascii_letters;
}


if( !function_exists('mktemp_file') ){
  
  function mktemp_file( $basename, $prefix=null, $keep_directory_after_finished=false):string{
    
    $prefix = $prefix ?? 'php-tempfile';
    $prefix = $prefix.'-'.dechex(crc32(random_bytes(10))).'-';
    $f_name = sys_get_temp_dir().DIRECTORY_SEPARATOR.$prefix.$basename;
    touch($f_name);
    // 消さなくても自動的に削除されるように。
    if ( !$keep_directory_after_finished ){
      register_shutdown_function(function() use ($f_name) {
        @unlink($f_name);
      });
    }
    return $f_name;
  }
}