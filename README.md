# php-Imagick-cmd-wrapper
image magick command wrapper for php

## Installing from github
```
composer config repositories.takuya/php-Imagick-cmd-wrapper vcs https://github.com/takuya/php-Imagick-cmd-wrapper
composer require takuya/php-Imagick-cmd-wrapper
```

## Usage Sample 


```php
$f_in = 'DkzpJ1lUUAA84KP.jpg';
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
      ->setOutputFile( 'jpeg:-' )
      ->execute();
$image_bin = $ret[1];
file_put_contents('out.jpg',$image_bin)    
```
