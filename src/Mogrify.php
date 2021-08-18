<?php

namespace SystemUtil;

use SystemUtil\AutoGeneratedTraits\MontageGenerated;
use SystemUtil\AutoGeneratedTraits\MogrifyGenerated;

class Mogrify extends  ComandWrapper {
  use MogrifyGenerated;
  use IMagickWrapper;
  /**
   * @var string
   */
  public static $command_path = 'mogrify';
  
}