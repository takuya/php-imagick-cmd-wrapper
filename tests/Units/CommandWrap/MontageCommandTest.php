<?php

namespace Tests\Units\CommandWrap;

use Tests\TestCase;
use SystemUtil\Montage;
use SystemUtil\Convert;

class MontageCommandTest extends TestCase {
  

  public function test_resize_sampling_unsharp_montage(){
    $f_in = __DIR__.'/../../sample-data/DkzpJ1lUUAA84KP.jpg';
    $width = 500;
    // convert
    $convert = new Convert();
    $ret = $convert
      ->unsharp('10x5+0.7+0')
      ->sample($width)
      ->setInputFile( $f_in )
      ->pointsize(30)
      ->fill('blue')
      ->strokewidth(1)
      ->stroke('gray80')
      ->font('DejaVu-Sans')
      ->annotate('+10+200','unsharp_sample')
      ->setOutputFile( '-' )
      ->execute();
    $results['unsharp_sample'] = $ret[1];
    $convert = new Convert();
    $ret = $convert
      ->sample($width)
      ->unsharp('10x5+0.7+0')
      ->setInputFile( $f_in )
      ->pointsize(30)
      ->fill('blue')
      ->strokewidth(1)
      ->stroke('gray80')
      ->font('DejaVu-Sans')
      ->annotate('+10+200','sample_unsharp')
      ->setOutputFile( '-' )
      ->execute();
    $results['sample_unsharp'] = $ret[1];
    $convert = new Convert();
    $ret = $convert
      ->resize($width)
      ->unsharp('10x5+0.7+0')
      ->setInputFile( $f_in )
      ->pointsize(30)
      ->fill('blue')
      ->strokewidth(1)
      ->stroke('gray80')
      ->font('DejaVu-Sans')
      ->annotate('+10+200','resize_unsharp')
      ->setOutputFile( 'jpeg:-' )
      ->execute();
    $results['resize_unsharp'] = $ret[1];
    $convert = new Convert();
    $ret = $convert
      ->unsharp('10x5+0.7+0')
      ->resize($width)
      ->setInputFile( $f_in )
      ->pointsize(30)
      ->fill('blue')
      ->strokewidth(1)
      ->stroke('gray80')
      ->font('DejaVu-Sans')
      ->annotate('+10+200','unsharp_resize')
      ->setOutputFile( 'jpeg:-' )
      ->execute();
    $results['unsharp_resize'] = $ret[1];
  
    foreach ( $results as $k=>$v ) {
    
      $f_out = mktempfile('test.jpg' );
      file_put_contents($f_out, $v);
      $results[$k]  = $f_out;
    }
    $montage = new Montage();
    $f_out = mktempfile('montage.jpg');
    $montage
      ->setInputFileList(array_values($results))
      ->tile('2x2')
      ->geometry('500')
      ->setOutputFile($f_out)
      ->execute();
    
    //file_put_contents('out.jpg',file_get_contents($f_out));
    $size = getimagesize($f_out);
    $this->assertEquals($width*2,$size[0]);
  }
  
}