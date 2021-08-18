# php-Imagick-cmd-wrapper
image magick command wrapper for php

## Installing from github
```

rep=https://github.com/takuya/php-Imagick-cmd-wrapper
composer config repositories.takuya/php-Imagick-cmd-wrapper vcs $repo
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

## Developing notice 

This project uses auto generated php code , by parsing `converet -h`.

If you want to re-geneate class, type these command in CLI.
```
php bin/create-wrapper-template.php convert
php bin/create-wrapper-template.php montage
php bin/create-wrapper-template.php identify
php bin/create-wrapper-template.php mogrify
 ```