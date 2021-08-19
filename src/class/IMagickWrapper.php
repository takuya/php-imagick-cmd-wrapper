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
  public function setInputFileList ( array $file_names ) {
    $this->opts[] = $file_names;
    return $this;
  }
  
  /**
   * @param string $file_name
   * @return $this
   */
  public function setInputFile ( $file_name = '-' ) {
    static::addInputFile($file_name);
    return $this;
  }
  
  /**
   * @param string $file_name
   * @return $this
   */
  public function addInputFile ( $file_name = '-' ) {
    $this->opts[] = [$file_name];
    return $this;
  }
  
  /**
   * @param string $file_name
   * @return $this
   */
  public function setOutputFile ( $file_name = 'jpeg:-' ) {
    $this->opts[] = [$file_name];
    return $this;
  }
  
  /**
   * @return array
   */
  public function execute () {
    $this->opts = array_merge( [], ...$this->opts );;
    return parent::execute();
  }
}