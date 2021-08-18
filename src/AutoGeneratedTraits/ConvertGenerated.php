<?php

namespace SystemUtil\AutoGeneratedTraits;

/**
 * Auto generated From command help
 */
trait ConvertGenerated
{
	/**
	 * join images into a single multi-image file
	 */
	public function adjoin()
	{
		return $this->addOpt('-adjoin');
	}


	/**
	 * affine transform matrix
	 * @param $matrix
	 */
	public function affine($matrix)
	{
		return $this->addOpt('-affine', $matrix );
	}


	/**
	 * on
	 * @param $option
	 */
	public function alpha($option)
	{
		return $this->addOpt('-alpha', $option );
	}


	/**
	 * remove pixel-aliasing
	 */
	public function antialias()
	{
		return $this->addOpt('-antialias');
	}


	/**
	 * decipher image with this password
	 * @param $password
	 */
	public function authenticate($password)
	{
		return $this->addOpt('-authenticate', $password );
	}


	/**
	 * lessen
	 * @param $value
	 */
	public function attenuate($value)
	{
		return $this->addOpt('-attenuate', $value );
	}


	/**
	 * background color
	 * @param $color
	 */
	public function background($color)
	{
		return $this->addOpt('-background', $color );
	}


	/**
	 * add bias when convolving an image
	 * @param $value
	 */
	public function bias($value)
	{
		return $this->addOpt('-bias', $value );
	}


	/**
	 * black point compensation
	 * @param $use
	 */
	public function blackPointCompensation($use)
	{
		return $this->addOpt('-black-point-compensation', $use );
	}


	/**
	 * chromaticity blue primary point
	 * @param $point
	 */
	public function bluePrimary($point)
	{
		return $this->addOpt('-blue-primary', $point );
	}


	/**
	 * border color
	 * @param $color
	 */
	public function bordercolor($color)
	{
		return $this->addOpt('-bordercolor', $color );
	}


	/**
	 * assign a caption to an image
	 * @param $string
	 */
	public function caption($string)
	{
		return $this->addOpt('-caption', $string );
	}


	/**
	 * apply option to select image channels
	 * @param $type
	 */
	public function channel($type)
	{
		return $this->addOpt('-channel', $type );
	}


	/**
	 * associate a clip mask with the image
	 * @param $filename
	 */
	public function clipMask($filename)
	{
		return $this->addOpt('-clip-mask', $filename );
	}


	/**
	 * preferred number of colors in the image
	 * @param $value
	 */
	public function colors($value)
	{
		return $this->addOpt('-colors', $value );
	}


	/**
	 * alternate image colorspace
	 * @param $type
	 */
	public function colorspace($type)
	{
		return $this->addOpt('-colorspace', $type );
	}


	/**
	 * annotate image with comment
	 * @param $string
	 */
	public function comment($string)
	{
		return $this->addOpt('-comment', $string );
	}


	/**
	 * set image composite operator
	 * @param $operator
	 */
	public function compose($operator)
	{
		return $this->addOpt('-compose', $operator );
	}


	/**
	 * type of pixel compression when writing the image
	 * @param $type
	 */
	public function compress($type)
	{
		return $this->addOpt('-compress', $type );
	}


	/**
	 * @param $format
	 */
	public function define($format)
	{
		return $this->addOpt('-define', $format );
	}


	/**
	 * display the next image after pausing
	 * @param $value
	 */
	public function delay($value)
	{
		return $this->addOpt('-delay', $value );
	}


	/**
	 * horizontal and vertical density of the image
	 * @param $geometry
	 */
	public function density($geometry)
	{
		return $this->addOpt('-density', $geometry );
	}


	/**
	 * image depth
	 * @param $value
	 */
	public function depth($value)
	{
		return $this->addOpt('-depth', $value );
	}


	/**
	 * render text right-to-left or left-to-right
	 * @param $type
	 */
	public function direction($type)
	{
		return $this->addOpt('-direction', $type );
	}


	/**
	 * get image or font from this X server
	 * @param $server
	 */
	public function display($server)
	{
		return $this->addOpt('-display', $server );
	}


	/**
	 * layer disposal method
	 * @param $method
	 */
	public function dispose($method)
	{
		return $this->addOpt('-dispose', $method );
	}


	/**
	 * apply error diffusion to image
	 * @param $method
	 */
	public function dither($method)
	{
		return $this->addOpt('-dither', $method );
	}


	/**
	 * text encoding type
	 * @param $type
	 */
	public function encoding($type)
	{
		return $this->addOpt('-encoding', $type );
	}


	/**
	 * endianness
	 * @param $type
	 */
	public function endian($type)
	{
		return $this->addOpt('-endian', $type );
	}


	/**
	 * render text with this font family
	 * @param $name
	 */
	public function family($name)
	{
		return $this->addOpt('-family', $name );
	}


	/**
	 * color to use when filling a graphic primitive
	 * @param $color
	 */
	public function fill($color)
	{
		return $this->addOpt('-fill', $color );
	}


	/**
	 * use this filter when resizing an image
	 * @param $type
	 */
	public function filter($type)
	{
		return $this->addOpt('-filter', $type );
	}


	/**
	 * render text with this font
	 * @param $name
	 */
	public function font($name)
	{
		return $this->addOpt('-font', $name );
	}


	public function format()
	{
		return $this->addOpt('-format');
	}


	/**
	 * colors within this distance are considered equal
	 * @param $distance
	 */
	public function fuzz($distance)
	{
		return $this->addOpt('-fuzz', $distance );
	}


	/**
	 * horizontal and vertical text placement
	 * @param $type
	 */
	public function gravity($type)
	{
		return $this->addOpt('-gravity', $type );
	}


	/**
	 * chromaticity green primary point
	 * @param $point
	 */
	public function greenPrimary($point)
	{
		return $this->addOpt('-green-primary', $point );
	}


	/**
	 * method to generate intensity value from pixel
	 * @param $method
	 */
	public function intensity($method)
	{
		return $this->addOpt('-intensity', $method );
	}


	/**
	 * type of rendering intent when managing the image color
	 * @param $type
	 */
	public function intent($type)
	{
		return $this->addOpt('-intent', $type );
	}


	/**
	 * type of image interlacing scheme
	 * @param $type
	 */
	public function interlace($type)
	{
		return $this->addOpt('-interlace', $type );
	}


	/**
	 * set the space between two text lines
	 * @param $value
	 */
	public function interlineSpacing($value)
	{
		return $this->addOpt('-interline-spacing', $value );
	}


	/**
	 * pixel color interpolation method
	 * @param $method
	 */
	public function interpolate($method)
	{
		return $this->addOpt('-interpolate', $method );
	}


	/**
	 * set the space between two words
	 * @param $value
	 */
	public function interwordSpacing($value)
	{
		return $this->addOpt('-interword-spacing', $value );
	}


	/**
	 * set the space between two letters
	 * @param $value
	 */
	public function kerning($value)
	{
		return $this->addOpt('-kerning', $value );
	}


	/**
	 * assign a label to an image
	 * @param $string
	 */
	public function label($string)
	{
		return $this->addOpt('-label', $string );
	}


	/**
	 * value    pixel cache resource limit
	 * @param $type
	 */
	public function limit($type)
	{
		return $this->addOpt('-limit', $type );
	}


	/**
	 * add Netscape loop extension to your GIF animation
	 * @param $iterations
	 */
	public function loop($iterations)
	{
		return $this->addOpt('-loop', $iterations );
	}


	/**
	 * associate a mask with the image
	 * @param $filename
	 */
	public function mask($filename)
	{
		return $this->addOpt('-mask', $filename );
	}


	/**
	 * store matte channel if the image has one
	 */
	public function matte()
	{
		return $this->addOpt('-matte');
	}


	/**
	 * frame color
	 * @param $color
	 */
	public function mattecolor($color)
	{
		return $this->addOpt('-mattecolor', $color );
	}


	/**
	 * report image moments
	 */
	public function moments()
	{
		return $this->addOpt('-moments');
	}


	/**
	 * monitor progress
	 */
	public function monitor()
	{
		return $this->addOpt('-monitor');
	}


	/**
	 * image orientation
	 * @param $type
	 */
	public function orient($type)
	{
		return $this->addOpt('-orient', $type );
	}


	/**
	 * size and location of an image canvas
	 * @param $geometry
	 */
	public function page($geometry)
	{
		return $this->addOpt('-page', $geometry );
	}


	/**
	 * efficiently determine image attributes
	 */
	public function ping()
	{
		return $this->addOpt('-ping');
	}


	/**
	 * font point size
	 * @param $value
	 */
	public function pointsize($value)
	{
		return $this->addOpt('-pointsize', $value );
	}


	/**
	 * maximum number of significant digits to print
	 * @param $value
	 */
	public function precision($value)
	{
		return $this->addOpt('-precision', $value );
	}


	/**
	 * image preview type
	 * @param $type
	 */
	public function preview($type)
	{
		return $this->addOpt('-preview', $type );
	}


	/**
	 * JPEG
	 * @param $value
	 */
	public function quality($value)
	{
		return $this->addOpt('-quality', $value );
	}


	/**
	 * suppress all warning messages
	 */
	public function quiet()
	{
		return $this->addOpt('-quiet');
	}


	/**
	 * chromaticity red primary point
	 * @param $point
	 */
	public function redPrimary($point)
	{
		return $this->addOpt('-red-primary', $point );
	}


	/**
	 * pay attention to warning messages
	 */
	public function regardWarnings()
	{
		return $this->addOpt('-regard-warnings');
	}


	/**
	 * transform image colors to match this set of colors
	 * @param $filename
	 */
	public function remap($filename)
	{
		return $this->addOpt('-remap', $filename );
	}


	/**
	 * size and location of an image canvas
	 * @param $geometry
	 */
	public function repage($geometry)
	{
		return $this->addOpt('-repage', $geometry );
	}


	/**
	 * remain in effect until parenthesis boundary
	 * @param $settings
	 */
	public function respectParentheses($settings)
	{
		return $this->addOpt('-respect-parentheses', $settings );
	}


	/**
	 * horizontal and vertical sampling factor
	 * @param $geometry
	 */
	public function samplingFactor($geometry)
	{
		return $this->addOpt('-sampling-factor', $geometry );
	}


	/**
	 * image scene number
	 * @param $value
	 */
	public function scene($value)
	{
		return $this->addOpt('-scene', $value );
	}


	/**
	 * seed a new sequence of pseudo-random numbers
	 * @param $value
	 */
	public function seed($value)
	{
		return $this->addOpt('-seed', $value );
	}


	/**
	 * width and height of image
	 * @param $geometry
	 */
	public function size($geometry)
	{
		return $this->addOpt('-size', $geometry );
	}


	/**
	 * render text with this font stretch
	 * @param $type
	 */
	public function stretch($type)
	{
		return $this->addOpt('-stretch', $type );
	}


	/**
	 * graphic primitive stroke color
	 * @param $color
	 */
	public function stroke($color)
	{
		return $this->addOpt('-stroke', $color );
	}


	/**
	 * graphic primitive stroke width
	 * @param $value
	 */
	public function strokewidth($value)
	{
		return $this->addOpt('-strokewidth', $value );
	}


	/**
	 * render text with this font style
	 * @param $type
	 */
	public function style($type)
	{
		return $this->addOpt('-style', $type );
	}


	/**
	 * resize support
	 * @param $factor
	 */
	public function support($factor)
	{
		return $this->addOpt('-support', $factor );
	}


	/**
	 * synchronize image to storage device
	 */
	public function synchronize()
	{
		return $this->addOpt('-synchronize');
	}


	/**
	 * declare the image as modified
	 */
	public function taint()
	{
		return $this->addOpt('-taint');
	}


	/**
	 * name of texture to tile onto the image background
	 * @param $filename
	 */
	public function texture($filename)
	{
		return $this->addOpt('-texture', $filename );
	}


	/**
	 * tile offset
	 * @param $geometry
	 */
	public function tileOffset($geometry)
	{
		return $this->addOpt('-tile-offset', $geometry );
	}


	/**
	 * color tree depth
	 * @param $value
	 */
	public function treedepth($value)
	{
		return $this->addOpt('-treedepth', $value );
	}


	/**
	 * transparent color
	 * @param $color
	 */
	public function transparentColor($color)
	{
		return $this->addOpt('-transparent-color', $color );
	}


	/**
	 * annotation bounding box color
	 * @param $color
	 */
	public function undercolor($color)
	{
		return $this->addOpt('-undercolor', $color );
	}


	/**
	 * the units of image resolution
	 * @param $type
	 */
	public function units($type)
	{
		return $this->addOpt('-units', $type );
	}


	/**
	 * print detailed information about the image
	 */
	public function verbose()
	{
		return $this->addOpt('-verbose');
	}


	/**
	 * FlashPix viewing transforms
	 */
	public function view()
	{
		return $this->addOpt('-view');
	}


	/**
	 * virtual pixel access method
	 * @param $method
	 */
	public function virtualPixel($method)
	{
		return $this->addOpt('-virtual-pixel', $method );
	}


	/**
	 * render text with this font weight
	 * @param $type
	 */
	public function weight($type)
	{
		return $this->addOpt('-weight', $type );
	}


	/**
	 * chromaticity white point
	 * @param $point
	 */
	public function whitePoint($point)
	{
		return $this->addOpt('-white-point', $point );
	}


	/**
	 * adaptively blur pixels
	 * @param $geometry
	 */
	public function adaptiveBlur($geometry)
	{
		return $this->addOpt('-adaptive-blur', $geometry );
	}


	/**
	 * adaptively resize image using
	 * @param $geometry
	 */
	public function adaptiveResize($geometry)
	{
		return $this->addOpt('-adaptive-resize', $geometry );
	}


	/**
	 * adaptively sharpen pixels
	 * @param $geometry
	 */
	public function adaptiveSharpen($geometry)
	{
		return $this->addOpt('-adaptive-sharpen', $geometry );
	}


	/**
	 * text annotate the image with text
	 * @param $geometry
	 */
	public function annotate($geometry)
	{
		return $this->addOpt('-annotate', $geometry );
	}


	/**
	 * automagically adjust gamma level of image
	 */
	public function autoGamma()
	{
		return $this->addOpt('-auto-gamma');
	}


	/**
	 * automagically adjust color levels of image
	 */
	public function autoLevel()
	{
		return $this->addOpt('-auto-level');
	}


	/**
	 * automagically orient
	 */
	public function autoOrient()
	{
		return $this->addOpt('-auto-orient');
	}


	/**
	 * measure performance
	 * @param $iterations
	 */
	public function bench($iterations)
	{
		return $this->addOpt('-bench', $iterations );
	}


	/**
	 * force all pixels below the threshold into black
	 * @param $value
	 */
	public function blackThreshold($value)
	{
		return $this->addOpt('-black-threshold', $value );
	}


	/**
	 * simulate a scene at nighttime in the moonlight
	 * @param $factor
	 */
	public function blueShift($factor)
	{
		return $this->addOpt('-blue-shift', $factor );
	}


	/**
	 * reduce image noise and reduce detail levels
	 * @param $geometry
	 */
	public function blur($geometry)
	{
		return $this->addOpt('-blur', $geometry );
	}


	/**
	 * surround image with a border of color
	 * @param $geometry
	 */
	public function border($geometry)
	{
		return $this->addOpt('-border', $geometry );
	}


	/**
	 * improve brightness
	 * @param $geometry
	 */
	public function brightnessContrast($geometry)
	{
		return $this->addOpt('-brightness-contrast', $geometry );
	}


	/**
	 * detect edges in the image
	 * @param $geometry
	 */
	public function canny($geometry)
	{
		return $this->addOpt('-canny', $geometry );
	}


	/**
	 * color correct with a color decision list
	 * @param $filename
	 */
	public function cdl($filename)
	{
		return $this->addOpt('-cdl', $filename );
	}


	/**
	 * simulate a charcoal drawing
	 * @param $radius
	 */
	public function charcoal($radius)
	{
		return $this->addOpt('-charcoal', $radius );
	}


	/**
	 * remove pixels from the image interior
	 * @param $geometry
	 */
	public function chop($geometry)
	{
		return $this->addOpt('-chop', $geometry );
	}


	/**
	 * keep pixel values in range
	 */
	public function clamp()
	{
		return $this->addOpt('-clamp');
	}


	/**
	 * clip along the first path from the
	 */
	public function clip()
	{
		return $this->addOpt('-clip');
	}


	/**
	 * clip along a named path from the
	 * @param $id
	 */
	public function clipPath($id)
	{
		return $this->addOpt('-clip-path', $id );
	}


	/**
	 * colorize the image with the fill color
	 * @param $value
	 */
	public function colorize($value)
	{
		return $this->addOpt('-colorize', $value );
	}


	/**
	 * apply color correction to the image
	 * @param $matrix
	 */
	public function colorMatrix($matrix)
	{
		return $this->addOpt('-color-matrix', $matrix );
	}


	/**
	 * connected-components uniquely labeled
	 * @param $connectivity
	 */
	public function connectedComponents($connectivity)
	{
		return $this->addOpt('-connected-components', $connectivity );
	}


	/**
	 * enhance or reduce the image contrast
	 */
	public function contrast()
	{
		return $this->addOpt('-contrast');
	}


	/**
	 * improve contrast by `stretching
	 * @param $geometry
	 */
	public function contrastStretch($geometry)
	{
		return $this->addOpt('-contrast-stretch', $geometry );
	}


	/**
	 * apply a convolution kernel to the image
	 * @param $coefficients
	 */
	public function convolve($coefficients)
	{
		return $this->addOpt('-convolve', $coefficients );
	}


	/**
	 * cycle the image colormap
	 * @param $amount
	 */
	public function cycle($amount)
	{
		return $this->addOpt('-cycle', $amount );
	}


	/**
	 * convert cipher pixels to plain pixels
	 * @param $filename
	 */
	public function decipher($filename)
	{
		return $this->addOpt('-decipher', $filename );
	}


	/**
	 * straighten an image
	 * @param $threshold
	 */
	public function deskew($threshold)
	{
		return $this->addOpt('-deskew', $threshold );
	}


	/**
	 * reduce the speckles within an image
	 */
	public function despeckle()
	{
		return $this->addOpt('-despeckle');
	}


	/**
	 * args distort images according to given method ad args
	 * @param $method
	 */
	public function distort($method)
	{
		return $this->addOpt('-distort', $method );
	}


	/**
	 * annotate the image with a graphic primitive
	 * @param $string
	 */
	public function draw($string)
	{
		return $this->addOpt('-draw', $string );
	}


	/**
	 * apply a filter to detect edges in the image
	 * @param $radius
	 */
	public function edge($radius)
	{
		return $this->addOpt('-edge', $radius );
	}


	/**
	 * convert plain pixels to cipher pixels
	 * @param $filename
	 */
	public function encipher($filename)
	{
		return $this->addOpt('-encipher', $filename );
	}


	/**
	 * emboss an image
	 * @param $radius
	 */
	public function emboss($radius)
	{
		return $this->addOpt('-emboss', $radius );
	}


	/**
	 * apply a digital filter to enhance a noisy image
	 */
	public function enhance()
	{
		return $this->addOpt('-enhance');
	}


	/**
	 * perform histogram equalization to an image
	 */
	public function equalize()
	{
		return $this->addOpt('-equalize');
	}


	/**
	 * value evaluate an arithmetic
	 * @param $operator
	 */
	public function evaluate($operator)
	{
		return $this->addOpt('-evaluate', $operator );
	}


	/**
	 * set the image size
	 * @param $geometry
	 */
	public function extent($geometry)
	{
		return $this->addOpt('-extent', $geometry );
	}


	/**
	 * extract area from image
	 * @param $geometry
	 */
	public function extract($geometry)
	{
		return $this->addOpt('-extract', $geometry );
	}


	/**
	 * analyze image features
	 * @param $distance
	 */
	public function features($distance)
	{
		return $this->addOpt('-features', $distance );
	}


	/**
	 * implements the discrete Fourier transform
	 */
	public function fft()
	{
		return $this->addOpt('-fft');
	}


	/**
	 * flip image vertically
	 */
	public function flip()
	{
		return $this->addOpt('-flip');
	}


	/**
	 * color floodfill the image with color
	 * @param $geometry
	 */
	public function floodfill($geometry)
	{
		return $this->addOpt('-floodfill', $geometry );
	}


	/**
	 * flop image horizontally
	 */
	public function flop()
	{
		return $this->addOpt('-flop');
	}


	/**
	 * surround image with an ornamental border
	 * @param $geometry
	 */
	public function frame($geometry)
	{
		return $this->addOpt('-frame', $geometry );
	}


	/**
	 * parameters apply function over image values
	 * @param $name
	 */
	public function function($name)
	{
		return $this->addOpt('-function', $name );
	}


	/**
	 * level of gamma correction
	 * @param $value
	 */
	public function gamma($value)
	{
		return $this->addOpt('-gamma', $value );
	}


	/**
	 * reduce image noise and reduce detail levels
	 * @param $geometry
	 */
	public function gaussianBlur($geometry)
	{
		return $this->addOpt('-gaussian-blur', $geometry );
	}


	/**
	 * preferred size or location of the image
	 * @param $geometry
	 */
	public function geometry($geometry)
	{
		return $this->addOpt('-geometry', $geometry );
	}


	/**
	 * convert image to grayscale
	 * @param $method
	 */
	public function grayscale($method)
	{
		return $this->addOpt('-grayscale', $method );
	}


	/**
	 * identify lines in the image
	 * @param $geometry
	 */
	public function houghLines($geometry)
	{
		return $this->addOpt('-hough-lines', $geometry );
	}


	/**
	 * identify the format and characteristics of the image
	 */
	public function identify()
	{
		return $this->addOpt('-identify');
	}


	/**
	 * implements the inverse discrete Fourier transform
	 */
	public function ift()
	{
		return $this->addOpt('-ift');
	}


	/**
	 * implode image pixels about the center
	 * @param $amount
	 */
	public function implode($amount)
	{
		return $this->addOpt('-implode', $amount );
	}


	/**
	 * resize image using
	 * @param $geometry
	 */
	public function interpolativeResize($geometry)
	{
		return $this->addOpt('-interpolative-resize', $geometry );
	}


	/**
	 * edge preserving noise reduction filter
	 * @param $geometry
	 */
	public function kuwahara($geometry)
	{
		return $this->addOpt('-kuwahara', $geometry );
	}


	/**
	 * local adaptive thresholding
	 * @param $geometry
	 */
	public function lat($geometry)
	{
		return $this->addOpt('-lat', $geometry );
	}


	/**
	 * adjust the level of image contrast
	 * @param $value
	 */
	public function level($value)
	{
		return $this->addOpt('-level', $value );
	}


	/**
	 * @param $color
	 */
	public function levelColors($color)
	{
		return $this->addOpt('-level-colors', $color );
	}


	/**
	 * improve contrast by `stretching with saturation
	 * @param $geometry
	 */
	public function linearStretch($geometry)
	{
		return $this->addOpt('-linear-stretch', $geometry );
	}


	/**
	 * rescale image with seam-carving
	 * @param $geometry
	 */
	public function liquidRescale($geometry)
	{
		return $this->addOpt('-liquid-rescale', $geometry );
	}


	/**
	 * enhance local contrast
	 * @param $geometry
	 */
	public function localContrast($geometry)
	{
		return $this->addOpt('-local-contrast', $geometry );
	}


	/**
	 * double the size of the image with pixel art scaling
	 */
	public function magnify()
	{
		return $this->addOpt('-magnify');
	}


	/**
	 * delineate arbitrarily shaped clusters in the image
	 * @param $geometry
	 */
	public function meanShift($geometry)
	{
		return $this->addOpt('-mean-shift', $geometry );
	}


	/**
	 * apply a median filter to the image
	 * @param $geometry
	 */
	public function median($geometry)
	{
		return $this->addOpt('-median', $geometry );
	}


	/**
	 * make each pixel the
	 * @param $geometry
	 */
	public function mode($geometry)
	{
		return $this->addOpt('-mode', $geometry );
	}


	/**
	 * vary the brightness
	 * @param $value
	 */
	public function modulate($value)
	{
		return $this->addOpt('-modulate', $value );
	}


	/**
	 * transform image to black and white
	 */
	public function monochrome()
	{
		return $this->addOpt('-monochrome');
	}


	/**
	 * kernel apply a morphology method to the image
	 * @param $method
	 */
	public function morphology($method)
	{
		return $this->addOpt('-morphology', $method );
	}


	/**
	 * simulate motion blur
	 * @param $geometry
	 */
	public function motionBlur($geometry)
	{
		return $this->addOpt('-motion-blur', $geometry );
	}


	/**
	 * replace every pixel with its complementary color
	 */
	public function negate()
	{
		return $this->addOpt('-negate');
	}


	/**
	 * add or reduce noise in an image
	 * @param $geometry
	 */
	public function noise($geometry)
	{
		return $this->addOpt('-noise', $geometry );
	}


	/**
	 * transform image to span the full range of colors
	 */
	public function normalize()
	{
		return $this->addOpt('-normalize');
	}


	/**
	 * change this color to the fill color
	 * @param $color
	 */
	public function opaque($color)
	{
		return $this->addOpt('-opaque', $color );
	}


	/**
	 * add a noise pattern to the image with specific amplitudes
	 * @param $NxN
	 */
	public function orderedDither($NxN)
	{
		return $this->addOpt('-ordered-dither', $NxN );
	}


	/**
	 * simulate an oil painting
	 * @param $radius
	 */
	public function paint($radius)
	{
		return $this->addOpt('-paint', $radius );
	}


	/**
	 * pixel value less than |epsilon| become epsilon or -epsilon
	 * @param $epsilon
	 */
	public function perceptible($epsilon)
	{
		return $this->addOpt('-perceptible', $epsilon );
	}


	/**
	 * simulate a Polaroid picture
	 * @param $angle
	 */
	public function polaroid($angle)
	{
		return $this->addOpt('-polaroid', $angle );
	}


	/**
	 * reduce the image to a limited number of color levels
	 * @param $levels
	 */
	public function posterize($levels)
	{
		return $this->addOpt('-posterize', $levels );
	}


	/**
	 * add
	 * @param $filename
	 */
	public function profile($filename)
	{
		return $this->addOpt('-profile', $filename );
	}


	/**
	 * reduce colors in this colorspace
	 * @param $colorspace
	 */
	public function quantize($colorspace)
	{
		return $this->addOpt('-quantize', $colorspace );
	}


	/**
	 * radial blur the image
	 * @param $angle
	 */
	public function radialBlur($angle)
	{
		return $this->addOpt('-radial-blur', $angle );
	}


	/**
	 * lighten
	 * @param $value
	 */
	public function raise($value)
	{
		return $this->addOpt('-raise', $value );
	}


	/**
	 * @param $low
	 */
	public function randomThreshold($low)
	{
		return $this->addOpt('-random-threshold', $low );
	}


	/**
	 * apply options to a portion of the image
	 * @param $geometry
	 */
	public function region($geometry)
	{
		return $this->addOpt('-region', $geometry );
	}


	/**
	 * render vector graphics
	 */
	public function render()
	{
		return $this->addOpt('-render');
	}


	/**
	 * change the resolution of an image
	 * @param $geometry
	 */
	public function resample($geometry)
	{
		return $this->addOpt('-resample', $geometry );
	}


	/**
	 * resize the image
	 * @param $geometry
	 */
	public function resize($geometry)
	{
		return $this->addOpt('-resize', $geometry );
	}


	/**
	 * roll an image vertically or horizontally
	 * @param $geometry
	 */
	public function roll($geometry)
	{
		return $this->addOpt('-roll', $geometry );
	}


	/**
	 * apply Paeth rotation to the image
	 * @param $degrees
	 */
	public function rotate($degrees)
	{
		return $this->addOpt('-rotate', $degrees );
	}


	/**
	 * rotational blur the image
	 * @param $angle
	 */
	public function rotationalBlur($angle)
	{
		return $this->addOpt('-rotational-blur', $angle );
	}


	/**
	 * scale image with pixel sampling
	 * @param $geometry
	 */
	public function sample($geometry)
	{
		return $this->addOpt('-sample', $geometry );
	}


	/**
	 * scale the image
	 * @param $geometry
	 */
	public function scale($geometry)
	{
		return $this->addOpt('-scale', $geometry );
	}


	/**
	 * segment an image
	 * @param $values
	 */
	public function segment($values)
	{
		return $this->addOpt('-segment', $values );
	}


	/**
	 * selectively blur pixels within a contrast threshold
	 * @param $geometry
	 */
	public function selectiveBlur($geometry)
	{
		return $this->addOpt('-selective-blur', $geometry );
	}


	/**
	 * simulate a sepia-toned photo
	 * @param $threshold
	 */
	public function sepiaTone($threshold)
	{
		return $this->addOpt('-sepia-tone', $threshold );
	}


	/**
	 * value  set an image property
	 * @param $property
	 */
	public function set($property)
	{
		return $this->addOpt('-set', $property );
	}


	/**
	 * shade the image using a distant light source
	 * @param $degrees
	 */
	public function shade($degrees)
	{
		return $this->addOpt('-shade', $degrees );
	}


	/**
	 * simulate an image shadow
	 * @param $geometry
	 */
	public function shadow($geometry)
	{
		return $this->addOpt('-shadow', $geometry );
	}


	/**
	 * sharpen the image
	 * @param $geometry
	 */
	public function sharpen($geometry)
	{
		return $this->addOpt('-sharpen', $geometry );
	}


	/**
	 * shave pixels from the image edges
	 * @param $geometry
	 */
	public function shave($geometry)
	{
		return $this->addOpt('-shave', $geometry );
	}


	/**
	 * slide one edge of the image along the X or Y axis
	 * @param $geometry
	 */
	public function shear($geometry)
	{
		return $this->addOpt('-shear', $geometry );
	}


	/**
	 * increase the contrast without saturating highlights or shadows
	 * @param $geometry
	 */
	public function sigmoidalContrast($geometry)
	{
		return $this->addOpt('-sigmoidal-contrast', $geometry );
	}


	/**
	 * simulate a pencil sketch
	 * @param $geometry
	 */
	public function sketch($geometry)
	{
		return $this->addOpt('-sketch', $geometry );
	}


	/**
	 * negate all pixels above the threshold level
	 * @param $threshold
	 */
	public function solarize($threshold)
	{
		return $this->addOpt('-solarize', $threshold );
	}


	/**
	 * args fill in a image based on a few color points
	 * @param $method
	 */
	public function sparseColor($method)
	{
		return $this->addOpt('-sparse-color', $method );
	}


	/**
	 * splice the background color into the image
	 * @param $geometry
	 */
	public function splice($geometry)
	{
		return $this->addOpt('-splice', $geometry );
	}


	/**
	 * displace image pixels by a random amount
	 * @param $radius
	 */
	public function spread($radius)
	{
		return $this->addOpt('-spread', $radius );
	}


	/**
	 * geometry replace each pixel with corresponding statistic from the neighborhood
	 * @param $type
	 */
	public function statistic($type)
	{
		return $this->addOpt('-statistic', $type );
	}


	/**
	 * strip image of all profiles and comments
	 */
	public function strip()
	{
		return $this->addOpt('-strip');
	}


	/**
	 * swirl image pixels about the center
	 * @param $degrees
	 */
	public function swirl($degrees)
	{
		return $this->addOpt('-swirl', $degrees );
	}


	/**
	 * threshold the image
	 * @param $value
	 */
	public function threshold($value)
	{
		return $this->addOpt('-threshold', $value );
	}


	/**
	 * create a thumbnail of the image
	 * @param $geometry
	 */
	public function thumbnail($geometry)
	{
		return $this->addOpt('-thumbnail', $geometry );
	}


	/**
	 * tile image when filling a graphic primitive
	 * @param $filename
	 */
	public function tile($filename)
	{
		return $this->addOpt('-tile', $filename );
	}


	/**
	 * tint the image with the fill color
	 * @param $value
	 */
	public function tint($value)
	{
		return $this->addOpt('-tint', $value );
	}


	/**
	 * affine transform image
	 */
	public function transform()
	{
		return $this->addOpt('-transform');
	}


	/**
	 * make this color transparent within the image
	 * @param $color
	 */
	public function transparent($color)
	{
		return $this->addOpt('-transparent', $color );
	}


	/**
	 * flip image vertically and rotate
	 */
	public function transpose()
	{
		return $this->addOpt('-transpose');
	}


	/**
	 * flop image horizontally and rotate
	 */
	public function transverse()
	{
		return $this->addOpt('-transverse');
	}


	/**
	 * trim image edges
	 */
	public function trim()
	{
		return $this->addOpt('-trim');
	}


	/**
	 * image type
	 * @param $type
	 */
	public function type($type)
	{
		return $this->addOpt('-type', $type );
	}


	/**
	 * discard all but one of any pixel color
	 */
	public function uniqueColors()
	{
		return $this->addOpt('-unique-colors');
	}


	/**
	 * sharpen the image
	 * @param $geometry
	 */
	public function unsharp($geometry)
	{
		return $this->addOpt('-unsharp', $geometry );
	}


	/**
	 * soften the edges of the image in vignette style
	 * @param $geometry
	 */
	public function vignette($geometry)
	{
		return $this->addOpt('-vignette', $geometry );
	}


	/**
	 * alter an image along a sine wave
	 * @param $geometry
	 */
	public function wave($geometry)
	{
		return $this->addOpt('-wave', $geometry );
	}


	/**
	 * removes noise from the image using a wavelet transform
	 * @param $threshold
	 */
	public function waveletDenoise($threshold)
	{
		return $this->addOpt('-wavelet-denoise', $threshold );
	}


	/**
	 * force all pixels above the threshold into white
	 * @param $value
	 */
	public function whiteThreshold($value)
	{
		return $this->addOpt('-white-threshold', $value );
	}


	/**
	 * append an image sequence
	 */
	public function append()
	{
		return $this->addOpt('-append');
	}


	/**
	 * apply a color lookup table to the image
	 */
	public function clut()
	{
		return $this->addOpt('-clut');
	}


	/**
	 * merge a sequence of images
	 */
	public function coalesce()
	{
		return $this->addOpt('-coalesce');
	}


	/**
	 * combine a sequence of images
	 */
	public function combine()
	{
		return $this->addOpt('-combine');
	}


	/**
	 * mathematically and visually annotate the difference between an image and its reconstruction
	 */
	public function compare()
	{
		return $this->addOpt('-compare');
	}


	/**
	 * perform complex mathematics on an image sequence
	 * @param $operator
	 */
	public function complex($operator)
	{
		return $this->addOpt('-complex', $operator );
	}


	/**
	 * composite image
	 */
	public function composite()
	{
		return $this->addOpt('-composite');
	}


	/**
	 * offset copy pixels from one area of an image to another
	 * @param $geometry
	 */
	public function copy($geometry)
	{
		return $this->addOpt('-copy', $geometry );
	}


	/**
	 * cut out a rectangular region of the image
	 * @param $geometry
	 */
	public function crop($geometry)
	{
		return $this->addOpt('-crop', $geometry );
	}


	/**
	 * break down an image sequence into constituent parts
	 */
	public function deconstruct()
	{
		return $this->addOpt('-deconstruct');
	}


	/**
	 * evaluate an arithmetic
	 * @param $operator
	 */
	public function evaluateSequence($operator)
	{
		return $this->addOpt('-evaluate-sequence', $operator );
	}


	/**
	 * flatten a sequence of images
	 */
	public function flatten()
	{
		return $this->addOpt('-flatten');
	}


	/**
	 * apply mathematical expression to an image channel
	 * @param $expression
	 */
	public function fx($expression)
	{
		return $this->addOpt('-fx', $expression );
	}


	/**
	 * apply a Hald color lookup table to the image
	 */
	public function haldClut()
	{
		return $this->addOpt('-hald-clut');
	}


	/**
	 * optimize
	 * @param $method
	 */
	public function layers($method)
	{
		return $this->addOpt('-layers', $method );
	}


	/**
	 * morph an image sequence
	 * @param $value
	 */
	public function morph($value)
	{
		return $this->addOpt('-morph', $value );
	}


	/**
	 * create a mosaic from an image sequence
	 */
	public function mosaic()
	{
		return $this->addOpt('-mosaic');
	}


	/**
	 * build a polynomial from the image sequence and the corresponding terms
	 * @param $terms
	 */
	public function poly($terms)
	{
		return $this->addOpt('-poly', $terms );
	}


	/**
	 * interpret string and print to console
	 * @param $string
	 */
	public function print($string)
	{
		return $this->addOpt('-print', $string );
	}


	/**
	 * process the image with a custom image filter
	 * @param $arguments
	 */
	public function process($arguments)
	{
		return $this->addOpt('-process', $arguments );
	}


	/**
	 * separate an image channel into a grayscale image
	 */
	public function separate()
	{
		return $this->addOpt('-separate');
	}


	/**
	 * smush an image sequence together
	 * @param $geometry
	 */
	public function smush($geometry)
	{
		return $this->addOpt('-smush', $geometry );
	}


	/**
	 * write images to this file
	 * @param $filename
	 */
	public function write($filename)
	{
		return $this->addOpt('-write', $filename );
	}


	/**
	 * clone an image
	 * @param $indexes
	 */
	public function clone($indexes)
	{
		return $this->addOpt('-clone', $indexes );
	}


	/**
	 * delete the image from the image sequence
	 * @param $indexes
	 */
	public function delete($indexes)
	{
		return $this->addOpt('-delete', $indexes );
	}


	/**
	 * @param $count
	 */
	public function duplicate($count)
	{
		return $this->addOpt('-duplicate', $count );
	}


	/**
	 * insert last image into the image sequence
	 * @param $index
	 */
	public function insert($index)
	{
		return $this->addOpt('-insert', $index );
	}


	/**
	 * reverse image sequence
	 */
	public function reverse()
	{
		return $this->addOpt('-reverse');
	}


	/**
	 * swap two images in the image sequence
	 * @param $indexes
	 */
	public function swap($indexes)
	{
		return $this->addOpt('-swap', $indexes );
	}


	/**
	 * display copious debugging information
	 * @param $events
	 */
	public function debug($events)
	{
		return $this->addOpt('-debug', $events );
	}


	/**
	 * distributed pixel cache spanning one or more servers
	 * @param $port
	 */
	public function distributeCache($port)
	{
		return $this->addOpt('-distribute-cache', $port );
	}


	/**
	 * print program options
	 */
	public function help()
	{
		return $this->addOpt('-help');
	}


	/**
	 * print a list of supported option arguments
	 * @param $type
	 */
	public function list($type)
	{
		return $this->addOpt('-list', $type );
	}


	/**
	 * format of debugging information
	 * @param $format
	 */
	public function log($format)
	{
		return $this->addOpt('-log', $format );
	}


	/**
	 * print version information
	 */
	public function version()
	{
		return $this->addOpt('-version');
	}
}
