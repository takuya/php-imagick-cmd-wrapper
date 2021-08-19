<?php

namespace CommandWrap;

use Tests\TestCase;
use SystemUtil\Identify;

class IdentifyCommandTest extends TestCase {
  public function test_identify_with_height() {
    $f_in = __DIR__.'/../../sample-data/DW41z4RUQAE9D8d.jpg';
    $f_in = realpath($f_in);
    $identify = new Identify();
    $ret = $identify->format('{width:%w, height:%h}')
      ->setInputFile($f_in)
      ->execute();
    $this->assertEquals("{width:1447, height:2046}",$ret[1]);
  }
  
}