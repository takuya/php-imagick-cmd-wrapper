<?php

namespace SystemUtil;

use SystemUtil\AutoGeneratedTraits\IdentifyGenerated;

class Identify extends  ComandWrapper {
  use IdentifyGenerated;
  use IMagickWrapper;
  /**
   * @var string
   */
  public static $command_path = 'identify';
  
}