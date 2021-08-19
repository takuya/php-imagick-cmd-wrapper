# php-Imagick-cmd-wrapper
Image magick shell command wrapper for php

## Why using magick shell command from php?

1. Occasionally, a `php-imagck` (ext-imagick) is not available. 

  Some mod-php server are not supporting ext-imagck. but convert command is easy to install.

2. Imagick class ( in ext-imagick) is not documented in precisely.

  Think, Can you tell how to use `png:compression-filter` in ext-imagick ?. Perhaps you can't. 
  But, there are very many `convert` samples in web. and we are trying to `system('convert a.jpg b.png')` calling with escaping shell arguments. What's a irritated.


So, we need `convert` command wrapper. 

## Installing from GitHub
```
repo=git@github.com:takuya/php-imagick-cmd-wrapper.git
composer config repositories.takuya/php-imagick-cmd-wrapper vcs $repo
composer require takuya/php-imagick-cmd-wrapper
```

## Usage Sample 

```php
$f_in = 'DkzpJ1lUUAA84KP.jpg';
$width = 500;
// convert
$convert = new Convert();
$ret = $convert
      ->setInputFile( $f_in )
      ->unsharp('10x5+0.7+0')
      ->sample($width)
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

## Important Notice! Call Method Ordering.

Before Use, You should know that OPTIONS Ordering is VERY IMPORTANT.

The `convert` command is Very NAIVE for option order.

We must care about Arguments Ordering.

#### Sample1 ( vain , not working. )
```php
(new Identify())
    ->setInputFile('a.jpg')
    ->format('[%w,%h]')
->execute();
```

This result in ` identify a.jpg -format '[%w,%w]'` , but no work.
#### Sample2 ( works fine. )
```php
(new Identify())
    ->setInputFile('a.jpg')
    ->format('[%w,%h]')
->execute();
```
This result in ` identify  -format '[%w,%w]' a.jpg ` , it will work fine.

### More Sample Usage

#### Convert JPEG to PNG.
```php
$convert = ;
(new Convert())
      ->setInputile( 'a.jpg' )
      ->setOutputFile( 'b.png' )
      ->execute();
```
#### Using STDOUT - converting jpeg to png  
```php
$convert = ;
$result = (new Convert())
      ->setInputile( 'a.jpg' )
      ->setOutputFile( 'png:-' )
      ->execute();
$png_binary = $result[1];
```
####  Structure of return value 
command result is array of 3 entries
```php
$result = [
  '0' => ' int / exit status code' ,
  '1' => ' string / stdout from command' ,
  '2' => ' string / stderr from command' ,
];
 ```
### Resize(sampling Algorithm) and UnSharp and Normalization
```php
$ret = $convert
      ->setInputFile( $f_in )
      ->sample('50%')
      ->unsharp('10x5+0.7+0')
      ->normalize()
      ->setOutputFile( 'jpeg:-' )
      ->execute();
```

### IDE Auto Completion.

Options(methods) are auto generated from Help doc from 'convert -h'.

So, in Some IDE, Auto completions will not work fine.

If it happens then add a path `src/generated/` to your Project search PATH.

## Developing notice.

This project uses auto generated php code, parsing `converet -h`.

If you want to re-generate class, execute these command in CLI.
```
composer run generate-class convert
composer run generate-class montage
composer run generate-class identify
composer run generate-class mogrify
 ```

I used these environment. wsl1 debian. 
```
wsl --list -v
  NAME      STATE           VERSION
* Debian    Running         1
```
```
cat /etc/debian_version
10.10
```
imagemagick from debian(wsl)
```
convert -version
Version: ImageMagick 6.9.10-23 Q16 x86_64 20190101 https://imagemagick.org
Copyright: © 1999-2019 ImageMagick Studio LLC
License: https://imagemagick.org/script/license.php
Features: Cipher DPC Modules OpenMP
Delegates (built-in): bzlib djvu fftw fontconfig freetype heic jbig jng jp2 jpeg lcms lqr ltdl lzma openexr pangocairo png tiff webp wmf x xml zlib
```