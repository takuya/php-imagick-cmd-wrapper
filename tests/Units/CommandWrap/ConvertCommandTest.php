<?php

namespace Tests\Units\CommandWrap;

use Tests\TestCase;
use SystemUtil\Convert;

class ConvertCommandTest extends TestCase {
  
  public function test_convert_resize_200 () {
    $f_in = __DIR__.'/../../sample-data/DkzpJ1lUUAA84KP.jpg';
    $width = 200;
    $f_out = mktemp_file( 'test.jpg' );
    // convert
    $convert = new Convert();
    $convert->setInputFile( $f_in )
            ->resize( $width )
            ->setOutputFile( $f_out )
            ->execute();
    // assertion
    $this->assertFileExists( $f_out );
    $this->assertEquals( $width, ( getimagesize( $f_out ) )[0] );
  }
  
  public function test_convert_resize_rotate_90 () {
    $f_in = __DIR__.'/../../sample-data/DkzpJ1lUUAA84KP.jpg';
    $width = 200;
    $rotate = 90;
    $f_out = mktemp_file( 'test.jpg' );
    // convert
    $convert = new Convert();
    $convert
      ->setInputFile( $f_in )
      ->resize( $width )
      ->rotate( $rotate )
      ->setOutputFile( $f_out )
      ->execute();
    // assertion
    $this->assertFileExists( $f_out );
    $this->assertEquals( $width, ( getimagesize( $f_out ) )[1] );
  }
  public function test_list_fonts_option(){
    $convert = new Convert();
    $str = $convert->list('font')->execute()[1];
    $ret = preg_grep('/Font:.+gothic.+/i',preg_split("/\n/",$str));
    $this->assertGreaterThan(0,sizeof($ret));
  }
  public function getSampleFontName(){
    $str = (new Convert())->list('font')->execute()[1];
    preg_match_all('/Font: (.+gothic.+)/i',$str,$m);
    $fonts = $m[1];
    return $fonts[intval(sizeof($fonts)/2)];
    
  }
  
  public function test_add_string_to_image(){
    $f_in = __DIR__.'/../../sample-data/DkzpJ1lUUAA84KP.jpg';
    $f_out = mktemp_file('sample.jpg');
    $width = 500;
    // convert
    $convert = new Convert();
    $ret = $convert->setInputFile($f_in)
      ->resize('300')
      ->pointsize(30)
      ->fill('blue')
      ->strokewidth(1)
      ->stroke('gray80')
      ->font($this->getSampleFontName())
      ->annotate('+10+100','2021-08-18')
      ->setOutputFile($f_out)
      ->execute();
  
    $this->assertEquals(0, $ret[0]);
    $this->assertEmpty($ret[1]);
    $this->assertEmpty($ret[2]);
    
  }
  
  public function test_resize_sampling_unsharp(){
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
      ->annotate('+10+100','unsharp_sample')
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
      ->annotate('+10+100','sample_unsharp')
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
      ->annotate('+10+100','resize_unsharp')
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
      ->annotate('+10+100','unsharp_resize')
      ->setOutputFile( 'jpeg:-' )
      ->execute();
    $results['unsharp_resize'] = $ret[1];
    
    foreach ( $results as $k=>$v ) {
  
      $f_out = mktemp_file( 'test.jpg' );
      file_put_contents($f_out, $v);
      $results[$k]  = $f_out;
    }
    $convert = new Convert();
    $tmp = mktemp_file('temp.jpg');
    $ret = $convert->setInputFileList(array_values($results))
      ->append('+')
      ->setOutputFile($tmp)
    ->execute();
    
    $ret = getimagesize($tmp);
    $this->assertEquals($width*sizeof($results), $ret[0]);
  }
  
}