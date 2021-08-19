<?php

namespace CommandWrap;

use Tests\TestCase;
use SystemUtil\Mogrify;

class MogrifyCommandTest  extends TestCase {
  public function test_mogrify_resize_200 () {
    $tmp_file = mktemp_file( 'test.jpg' );
    copy(__DIR__.'/../../sample-data/DkzpJ1lUUAA84KP.jpg',$tmp_file);
    
    $mogrify = new Mogrify();
    $mogrify
      ->resize('200')
      ->setInputFile($tmp_file)
      ->execute();
    
    
    $this->assertFileExists( $tmp_file );
    $this->assertEquals( 200, ( getimagesize( $tmp_file ) )[0] );
  }
  
}