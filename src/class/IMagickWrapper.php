<?php


namespace SystemUtil;

/**
 *
 */
trait IMagickWrapper {

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
   * @param string $bin       image binary string, pass to STDIN. With this arg, $file_name must be '-'.
   * @return $this
   */
  public function setInputFile ( string $file_name = '-', $bin=null ) {
    if (!is_null($bin) && $file_name != '-'){
      throw  new \InvalidArgumentException( 'To use STDIN , pass "-" as file_name' );
    }
    $this->input_stream = $bin;
    $this->addInputFile($file_name);
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