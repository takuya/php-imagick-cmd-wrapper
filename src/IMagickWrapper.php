<?php

namespace SystemUtil;

trait IMagickWrapper {
  /**
   * @var array
   */
  protected $input_files = [];
  /**
   * @var string
   */
  protected $output_file = '-';
  /**
   * @param string $file_name
   * @return $this
   */
  public function setInputFileList ( array $file_names) {
    $this->input_files = $file_names;
    return $this;
  }
  
  /**
   * @param string $file_name
   * @return $this
   */
  public function setInputFile ( $file_name = '-' ) {
    $this->input_files = [$file_name];
    return $this;
  }
  /**
   * @param string $file_name
   * @return $this
   */
  public function addInputFile ( $file_name = '-' ) {
    $this->input_files[] = $file_name;
    return $this;
  }
  
  /**
   * @param string $file_name
   * @return $this
   */
  public function setOutputFile ( $file_name = 'jpeg:-' ) {
    $this->output_file = $file_name;
    return $this;
  }
  
  /**
   * @return array
   */
  public function execute () {
    $opts = array_merge( [], $this->input_files, ...$this->opts );
    $opts = array_merge( $opts, [$this->output_file] );
    $this->opts = $opts;
    return parent::execute();
  }
  
}