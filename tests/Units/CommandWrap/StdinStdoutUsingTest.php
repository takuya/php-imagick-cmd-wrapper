<?php

namespace CommandWrap;

use Tests\TestCase;
use SystemUtil\Identify;
use SystemUtil\Convert;

class StdinStdoutUsingTest extends  TestCase {
  
  public function test_using_stdin(){
    $file = __DIR__.'/../../sample-data/DW41z4RUQAE9D8d.jpg';
    $file = realpath($file);
    //
    $identify = new Identify();
    $ret = $identify
      ->format('%w')
      ->setInputFile('-', file_get_contents($file))
      ->execute();
  
    $this->assertEquals(0, $ret[0]);
    $this->assertEquals(1447, $ret[1]);
  }
  public function test_using_stdout_stdin_at_same_time(){
    $file = __DIR__.'/../../sample-data/DW41z4RUQAE9D8d.jpg';
    $file = realpath($file);
    //
    $convert = new Convert();
    $result = $convert
      ->setInputFile('-', file_get_contents($file))
      ->resize('200x')
      ->setOutputFile('png:-')
      ->execute();
    $this->assertEquals(0, $result[0]);
    $this->assertGreaterThan(50000, strlen($result[1]));
    //
    $identify = new Identify();
    $ret = $identify
      ->format('%w')
      ->setInputFile('-', $result[1])
      ->execute();
    $this->assertEquals(0, $ret[0]);
    $this->assertEquals(200, $ret[1]);
    //
    //
    $identify = new Identify();
    $ret = $identify
      ->format('%m')//mime type
      ->setInputFile('-', $result[1])
      ->execute();
    $this->assertEquals(0, $ret[0]);
    $this->assertEquals("PNG", $ret[1]);
    

  }
}