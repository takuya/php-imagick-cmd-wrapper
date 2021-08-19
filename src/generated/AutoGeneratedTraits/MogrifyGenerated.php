<?php

/**
 * Auto generated from 'mogrify -h' help
 */
trait MogrifyGenerated
{
	/**
	 * Join images into a single multi-image file.
	 */
	public function adjoin()
	{
		return $this->addOpt('-adjoin');
	}


	/**
	 * Affine transform matrix.
	 * @param $matrix string Matrix
	 */
	public function affine($matrix)
	{
		return $this->addOpt('-affine', $matrix );
	}


	/**
	 * Transparent, extract, background, or shape.
	 * @param $option string Option
	 */
	public function alpha($option)
	{
		return $this->addOpt('-alpha', $option );
	}


	/**
	 * Remove pixel-aliasing.
	 */
	public function antialias()
	{
		return $this->addOpt('-antialias');
	}


	/**
	 * Decipher image with this password.
	 * @param $password string Password
	 */
	public function authenticate($password)
	{
		return $this->addOpt('-authenticate', $password );
	}


	/**
	 * Lessen (or intensify) when adding noise to an image.
	 * @param $value string Value
	 */
	public function attenuate($value)
	{
		return $this->addOpt('-attenuate', $value );
	}


	/**
	 * Background color.
	 * @param $color string Color
	 */
	public function background($color)
	{
		return $this->addOpt('-background', $color );
	}


	/**
	 * Add bias when convolving an image.
	 * @param $value string Value
	 */
	public function bias($value)
	{
		return $this->addOpt('-bias', $value );
	}


	/**
	 * Use black point compensation.
	 */
	public function blackPointCompensation()
	{
		return $this->addOpt('-blackPointCompensation');
	}


	/**
	 * Chromaticity blue primary point.
	 * @param $point string Point
	 */
	public function bluePrimary($point)
	{
		return $this->addOpt('-bluePrimary', $point );
	}


	/**
	 * Border color.
	 * @param $color string Color
	 */
	public function bordercolor($color)
	{
		return $this->addOpt('-bordercolor', $color );
	}


	/**
	 * Assign a caption to an image.
	 * @param $string string String
	 */
	public function caption($string)
	{
		return $this->addOpt('-caption', $string );
	}


	/**
	 * Color correct with a color decision list.
	 * @param $filename string Filename
	 */
	public function cdl($filename)
	{
		return $this->addOpt('-cdl', $filename );
	}


	/**
	 * Apply option to select image channels.
	 * @param $type string Type
	 */
	public function channel($type)
	{
		return $this->addOpt('-channel', $type );
	}


	/**
	 * Preferred number of colors in the image.
	 * @param $value string Value
	 */
	public function colors($value)
	{
		return $this->addOpt('-colors', $value );
	}


	/**
	 * Alternate image colorspace.
	 * @param $type string Type
	 */
	public function colorspace($type)
	{
		return $this->addOpt('-colorspace', $type );
	}


	/**
	 * Annotate image with comment.
	 * @param $string string String
	 */
	public function comment($string)
	{
		return $this->addOpt('-comment', $string );
	}


	/**
	 * Set image composite operator.
	 * @param $operator string Operator
	 */
	public function compose($operator)
	{
		return $this->addOpt('-compose', $operator );
	}


	/**
	 * Type of pixel compression when writing the image.
	 * @param $type string Type
	 */
	public function compress($type)
	{
		return $this->addOpt('-compress', $type );
	}


	/**
	 * Convert cipher pixels to plain pixels.
	 * @param $filename string Filename
	 */
	public function decipher($filename)
	{
		return $this->addOpt('-decipher', $filename );
	}


	/**
	 * Define one or more image format options.
	 * @param $format_option string 'format:option'
	 */
	public function define($format_option)
	{
		return $this->addOpt('-define', $format_option );
	}


	/**
	 * Display the next image after pausing.
	 * @param $value string Value
	 */
	public function delay($value)
	{
		return $this->addOpt('-delay', $value );
	}


	/**
	 * Horizontal and vertical density of the image.
	 * @param $geometry string Geometry
	 */
	public function density($geometry)
	{
		return $this->addOpt('-density', $geometry );
	}


	/**
	 * Image depth.
	 * @param $value string Value
	 */
	public function depth($value)
	{
		return $this->addOpt('-depth', $value );
	}


	/**
	 * Render text right-to-left or left-to-right.
	 * @param $type string Type
	 */
	public function direction($type)
	{
		return $this->addOpt('-direction', $type );
	}


	/**
	 * Get image or font from this X server.
	 * @param $server string Server
	 */
	public function display($server)
	{
		return $this->addOpt('-display', $server );
	}


	/**
	 * Layer disposal method.
	 * @param $method string Method
	 */
	public function dispose($method)
	{
		return $this->addOpt('-dispose', $method );
	}


	/**
	 * Apply error diffusion to image.
	 * @param $method string Method
	 */
	public function dither($method)
	{
		return $this->addOpt('-dither', $method );
	}


	/**
	 * Convert plain pixels to cipher pixels.
	 * @param $filename string Filename
	 */
	public function encipher($filename)
	{
		return $this->addOpt('-encipher', $filename );
	}


	/**
	 * Text encoding type.
	 * @param $type string Type
	 */
	public function encoding($type)
	{
		return $this->addOpt('-encoding', $type );
	}


	/**
	 * Endianness (MSB or LSB) of the image.
	 * @param $type string Type
	 */
	public function endian($type)
	{
		return $this->addOpt('-endian', $type );
	}


	/**
	 * Render text with this font family.
	 * @param $name string Name
	 */
	public function family($name)
	{
		return $this->addOpt('-family', $name );
	}


	/**
	 * Analyze image features (e.g. contrast, correlation).
	 * @param $distance string Distance
	 */
	public function features($distance)
	{
		return $this->addOpt('-features', $distance );
	}


	/**
	 * Color to use when filling a graphic primitive.
	 * @param $color string Color
	 */
	public function fill($color)
	{
		return $this->addOpt('-fill', $color );
	}


	/**
	 * Use this filter when resizing an image.
	 * @param $type string Type
	 */
	public function filter($type)
	{
		return $this->addOpt('-filter', $type );
	}


	/**
	 * Flatten a sequence of images.
	 */
	public function flatten()
	{
		return $this->addOpt('-flatten');
	}


	/**
	 * Render text with this font.
	 * @param $name string Name
	 */
	public function font($name)
	{
		return $this->addOpt('-font', $name );
	}


	/**
	 * Output formatted image characteristics.
	 * @param $_string_ string '"string"'
	 */
	public function format($_string_)
	{
		return $this->addOpt('-format', $_string_ );
	}


	/**
	 * Apply function over image values.
	 * @param $name string Name
	 * @param $parameters string Parameters
	 */
	public function function($name, $parameters)
	{
		return $this->addOpt('-function', $name." ".$parameters );
	}


	/**
	 * Colors within this distance are considered equal.
	 * @param $distance string Distance
	 */
	public function fuzz($distance)
	{
		return $this->addOpt('-fuzz', $distance );
	}


	/**
	 * Horizontal and vertical text placement.
	 * @param $type string Type
	 */
	public function gravity($type)
	{
		return $this->addOpt('-gravity', $type );
	}


	/**
	 * Chromaticity green primary point.
	 * @param $point string Point
	 */
	public function greenPrimary($point)
	{
		return $this->addOpt('-greenPrimary', $point );
	}


	/**
	 * Method to generate intensity value from pixel.
	 * @param $method string Method
	 */
	public function intensity($method)
	{
		return $this->addOpt('-intensity', $method );
	}


	/**
	 * Type of rendering intent when managing the image color.
	 * @param $type string Type
	 */
	public function intent($type)
	{
		return $this->addOpt('-intent', $type );
	}


	/**
	 * Type of image interlacing scheme.
	 * @param $type string Type
	 */
	public function interlace($type)
	{
		return $this->addOpt('-interlace', $type );
	}


	/**
	 * Set the space between two text lines.
	 * @param $value string Value
	 */
	public function interlineSpacing($value)
	{
		return $this->addOpt('-interlineSpacing', $value );
	}


	/**
	 * Pixel color interpolation method.
	 * @param $method string Method
	 */
	public function interpolate($method)
	{
		return $this->addOpt('-interpolate', $method );
	}


	/**
	 * Set the space between two words.
	 * @param $value string Value
	 */
	public function interwordSpacing($value)
	{
		return $this->addOpt('-interwordSpacing', $value );
	}


	/**
	 * Set the space between two letters.
	 * @param $value string Value
	 */
	public function kerning($value)
	{
		return $this->addOpt('-kerning', $value );
	}


	/**
	 * Assign a label to an image.
	 * @param $string string String
	 */
	public function label($string)
	{
		return $this->addOpt('-label', $string );
	}


	/**
	 * Pixel cache resource limit.
	 * @param $type string Type
	 * @param $value string Value
	 */
	public function limit($type, $value)
	{
		return $this->addOpt('-limit', $type." ".$value );
	}


	/**
	 * Add Netscape loop extension to your GIF animation.
	 * @param $iterations string Iterations
	 */
	public function loop($iterations)
	{
		return $this->addOpt('-loop', $iterations );
	}


	/**
	 * Associate a mask with the image.
	 * @param $filename string Filename
	 */
	public function mask($filename)
	{
		return $this->addOpt('-mask', $filename );
	}


	/**
	 * Store matte channel if the image has one.
	 */
	public function matte()
	{
		return $this->addOpt('-matte');
	}


	/**
	 * Frame color.
	 * @param $color string Color
	 */
	public function mattecolor($color)
	{
		return $this->addOpt('-mattecolor', $color );
	}


	/**
	 * Monitor progress.
	 */
	public function monitor()
	{
		return $this->addOpt('-monitor');
	}


	/**
	 * Apply a morphology method to the image.
	 * @param $method string Method
	 * @param $kernel string Kernel
	 */
	public function morphology($method, $kernel)
	{
		return $this->addOpt('-morphology', $method." ".$kernel );
	}


	/**
	 * Image orientation.
	 * @param $type string Type
	 */
	public function orient($type)
	{
		return $this->addOpt('-orient', $type );
	}


	/**
	 * Size and location of an image canvas (setting).
	 * @param $geometry string Geometry
	 */
	public function page($geometry)
	{
		return $this->addOpt('-page', $geometry );
	}


	/**
	 * Write images to this path on disk.
	 * @param $path string Path
	 */
	public function path($path)
	{
		return $this->addOpt('-path', $path );
	}


	/**
	 * Efficiently determine image attributes.
	 */
	public function ping()
	{
		return $this->addOpt('-ping');
	}


	/**
	 * Font point size.
	 * @param $value string Value
	 */
	public function pointsize($value)
	{
		return $this->addOpt('-pointsize', $value );
	}


	/**
	 * Maximum number of significant digits to print.
	 * @param $value string Value
	 */
	public function precision($value)
	{
		return $this->addOpt('-precision', $value );
	}


	/**
	 * Image preview type.
	 * @param $type string Type
	 */
	public function preview($type)
	{
		return $this->addOpt('-preview', $type );
	}


	/**
	 * JPEG/MIFF/PNG compression level.
	 * @param $value string Value
	 */
	public function quality($value)
	{
		return $this->addOpt('-quality', $value );
	}


	/**
	 * Suppress all warning messages.
	 */
	public function quiet()
	{
		return $this->addOpt('-quiet');
	}


	/**
	 * Chromaticity red primary point.
	 * @param $point string Point
	 */
	public function redPrimary($point)
	{
		return $this->addOpt('-redPrimary', $point );
	}


	/**
	 * Pay attention to warning messages.
	 */
	public function regardWarnings()
	{
		return $this->addOpt('-regardWarnings');
	}


	/**
	 * Transform image colors to match this set of colors.
	 * @param $filename string Filename
	 */
	public function remap($filename)
	{
		return $this->addOpt('-remap', $filename );
	}


	/**
	 * Size and location of an image canvas.
	 * @param $geometry string Geometry
	 */
	public function repage($geometry)
	{
		return $this->addOpt('-repage', $geometry );
	}


	/**
	 * Settings remain in effect until parenthesis boundary.
	 */
	public function respectParentheses()
	{
		return $this->addOpt('-respectParentheses');
	}


	/**
	 * Horizontal and vertical sampling factor.
	 * @param $geometry string Geometry
	 */
	public function samplingFactor($geometry)
	{
		return $this->addOpt('-samplingFactor', $geometry );
	}


	/**
	 * Image scene number.
	 * @param $value string Value
	 */
	public function scene($value)
	{
		return $this->addOpt('-scene', $value );
	}


	/**
	 * Seed a new sequence of pseudo-random numbers.
	 * @param $value string Value
	 */
	public function seed($value)
	{
		return $this->addOpt('-seed', $value );
	}


	/**
	 * Width and height of image.
	 * @param $geometry string Geometry
	 */
	public function size($geometry)
	{
		return $this->addOpt('-size', $geometry );
	}


	/**
	 * Render text with this font stretch.
	 * @param $type string Type
	 */
	public function stretch($type)
	{
		return $this->addOpt('-stretch', $type );
	}


	/**
	 * Graphic primitive stroke color.
	 * @param $color string Color
	 */
	public function stroke($color)
	{
		return $this->addOpt('-stroke', $color );
	}


	/**
	 * Graphic primitive stroke width.
	 * @param $value string Value
	 */
	public function strokewidth($value)
	{
		return $this->addOpt('-strokewidth', $value );
	}


	/**
	 * Render text with this font style.
	 * @param $type string Type
	 */
	public function style($type)
	{
		return $this->addOpt('-style', $type );
	}


	/**
	 * Synchronize image to storage device.
	 */
	public function synchronize()
	{
		return $this->addOpt('-synchronize');
	}


	/**
	 * Declare the image as modified.
	 */
	public function taint()
	{
		return $this->addOpt('-taint');
	}


	/**
	 * Name of texture to tile onto the image background.
	 * @param $filename string Filename
	 */
	public function texture($filename)
	{
		return $this->addOpt('-texture', $filename );
	}


	/**
	 * Tile offset.
	 * @param $geometry string Geometry
	 */
	public function tileOffset($geometry)
	{
		return $this->addOpt('-tileOffset', $geometry );
	}


	/**
	 * Color tree depth.
	 * @param $value string Value
	 */
	public function treedepth($value)
	{
		return $this->addOpt('-treedepth', $value );
	}


	/**
	 * Transparent color.
	 * @param $color string Color
	 */
	public function transparentColor($color)
	{
		return $this->addOpt('-transparentColor', $color );
	}


	/**
	 * Annotation bounding box color.
	 * @param $color string Color
	 */
	public function undercolor($color)
	{
		return $this->addOpt('-undercolor', $color );
	}


	/**
	 * The units of image resolution.
	 * @param $type string Type
	 */
	public function units($type)
	{
		return $this->addOpt('-units', $type );
	}


	/**
	 * Print detailed information about the image.
	 */
	public function verbose()
	{
		return $this->addOpt('-verbose');
	}


	/**
	 * FlashPix viewing transforms.
	 */
	public function view()
	{
		return $this->addOpt('-view');
	}


	/**
	 * Virtual pixel access method.
	 * @param $method string Method
	 */
	public function virtualPixel($method)
	{
		return $this->addOpt('-virtualPixel', $method );
	}


	/**
	 * Render text with this font weight.
	 * @param $type string Type
	 */
	public function weight($type)
	{
		return $this->addOpt('-weight', $type );
	}


	/**
	 * @param $point string Point
	 */
	public function whitePoint($point)
	{
		return $this->addOpt('-whitePoint', $point );
	}


	/**
	 * Adaptively blur pixels; decrease effect near edges.
	 * @param $geometry string Geometry
	 */
	public function adaptiveBlur($geometry)
	{
		return $this->addOpt('-adaptiveBlur', $geometry );
	}


	/**
	 * Adaptively resize image using 'mesh' interpolation.
	 * @param $geometry string Geometry
	 */
	public function adaptiveResize($geometry)
	{
		return $this->addOpt('-adaptiveResize', $geometry );
	}


	/**
	 * Adaptively sharpen pixels; increase effect near edges.
	 * @param $geometry string Geometry
	 */
	public function adaptiveSharpen($geometry)
	{
		return $this->addOpt('-adaptiveSharpen', $geometry );
	}


	/**
	 * Annotate the image with text.
	 * @param $geometry string Geometry
	 * @param $text string Text
	 */
	public function annotate($geometry, $text)
	{
		return $this->addOpt('-annotate', $geometry." ".$text );
	}


	/**
	 * Automagically adjust gamma level of image.
	 */
	public function autoGamma()
	{
		return $this->addOpt('-autoGamma');
	}


	/**
	 * Automagically adjust color levels of image.
	 */
	public function autoLevel()
	{
		return $this->addOpt('-autoLevel');
	}


	/**
	 * Automagically orient (rotate) image.
	 */
	public function autoOrient()
	{
		return $this->addOpt('-autoOrient');
	}


	/**
	 * Measure performance.
	 * @param $iterations string Iterations
	 */
	public function bench($iterations)
	{
		return $this->addOpt('-bench', $iterations );
	}


	/**
	 * Force all pixels below the threshold into black.
	 * @param $value string Value
	 */
	public function blackThreshold($value)
	{
		return $this->addOpt('-blackThreshold', $value );
	}


	/**
	 * Simulate a scene at nighttime in the moonlight.
	 */
	public function blueShift()
	{
		return $this->addOpt('-blueShift');
	}


	/**
	 * Reduce image noise and reduce detail levels.
	 * @param $geometry string Geometry
	 */
	public function blur($geometry)
	{
		return $this->addOpt('-blur', $geometry );
	}


	/**
	 * Surround image with a border of color.
	 * @param $geometry string Geometry
	 */
	public function border($geometry)
	{
		return $this->addOpt('-border', $geometry );
	}


	/**
	 * Improve brightness / contrast of the image.
	 * @param $geometry string Geometry
	 */
	public function brightnessContrast($geometry)
	{
		return $this->addOpt('-brightnessContrast', $geometry );
	}


	/**
	 * Detect edges in the image.
	 * @param $geometry string Geometry
	 */
	public function canny($geometry)
	{
		return $this->addOpt('-canny', $geometry );
	}


	/**
	 * Simulate a charcoal drawing.
	 * @param $radius string Radius
	 */
	public function charcoal($radius)
	{
		return $this->addOpt('-charcoal', $radius );
	}


	/**
	 * Remove pixels from the image interior.
	 * @param $geometry string Geometry
	 */
	public function chop($geometry)
	{
		return $this->addOpt('-chop', $geometry );
	}


	/**
	 * Keep pixel values in range (0-QuantumRange).
	 */
	public function clamp()
	{
		return $this->addOpt('-clamp');
	}


	/**
	 * Clip along the first path from the 8BIM profile.
	 */
	public function clip()
	{
		return $this->addOpt('-clip');
	}


	/**
	 * Associate a clip mask with the image.
	 * @param $filename string Filename
	 */
	public function clipMask($filename)
	{
		return $this->addOpt('-clipMask', $filename );
	}


	/**
	 * Clip along a named path from the 8BIM profile.
	 * @param $id string Id
	 */
	public function clipPath($id)
	{
		return $this->addOpt('-clipPath', $id );
	}


	/**
	 * Colorize the image with the fill color.
	 * @param $value string Value
	 */
	public function colorize($value)
	{
		return $this->addOpt('-colorize', $value );
	}


	/**
	 * Apply color correction to the image.
	 * @param $matrix string Matrix
	 */
	public function colorMatrix($matrix)
	{
		return $this->addOpt('-colorMatrix', $matrix );
	}


	/**
	 * Connected-components uniquely labeled.
	 * @param $connectivity string Connectivity
	 */
	public function connectedComponents($connectivity)
	{
		return $this->addOpt('-connectedComponents', $connectivity );
	}


	/**
	 * Enhance or reduce the image contrast.
	 */
	public function contrast()
	{
		return $this->addOpt('-contrast');
	}


	/**
	 * Improve contrast by `stretching' the intensity range.
	 * @param $geometry string Geometry
	 */
	public function contrastStretch($geometry)
	{
		return $this->addOpt('-contrastStretch', $geometry );
	}


	/**
	 * Apply a convolution kernel to the image.
	 * @param $coefficients string Coefficients
	 */
	public function convolve($coefficients)
	{
		return $this->addOpt('-convolve', $coefficients );
	}


	/**
	 * Cycle the image colormap.
	 * @param $amount string Amount
	 */
	public function cycle($amount)
	{
		return $this->addOpt('-cycle', $amount );
	}


	/**
	 * Straighten an image.
	 * @param $threshold string Threshold
	 */
	public function deskew($threshold)
	{
		return $this->addOpt('-deskew', $threshold );
	}


	/**
	 * Reduce the speckles within an image.
	 */
	public function despeckle()
	{
		return $this->addOpt('-despeckle');
	}


	/**
	 * Distort images according to given method ad args.
	 * @param $method string Method
	 * @param $args string Args
	 */
	public function distort($method, $args)
	{
		return $this->addOpt('-distort', $method." ".$args );
	}


	/**
	 * Annotate the image with a graphic primitive.
	 * @param $string string String
	 */
	public function draw($string)
	{
		return $this->addOpt('-draw', $string );
	}


	/**
	 * Apply a filter to detect edges in the image.
	 * @param $radius string Radius
	 */
	public function edge($radius)
	{
		return $this->addOpt('-edge', $radius );
	}


	/**
	 * Emboss an image.
	 * @param $radius string Radius
	 */
	public function emboss($radius)
	{
		return $this->addOpt('-emboss', $radius );
	}


	/**
	 * Apply a digital filter to enhance a noisy image.
	 */
	public function enhance()
	{
		return $this->addOpt('-enhance');
	}


	/**
	 * Perform histogram equalization to an image.
	 */
	public function equalize()
	{
		return $this->addOpt('-equalize');
	}


	/**
	 * Evaluate an arithmetic, relational, or logical expression.
	 * @param $operator string Operator
	 * @param $value string Value
	 */
	public function evaluate($operator, $value)
	{
		return $this->addOpt('-evaluate', $operator." ".$value );
	}


	/**
	 * Set the image size.
	 * @param $geometry string Geometry
	 */
	public function extent($geometry)
	{
		return $this->addOpt('-extent', $geometry );
	}


	/**
	 * Extract area from image.
	 * @param $geometry string Geometry
	 */
	public function extract($geometry)
	{
		return $this->addOpt('-extract', $geometry );
	}


	/**
	 * Identify lines in the image.
	 * @param $geometry string Geometry
	 */
	public function houghLines($geometry)
	{
		return $this->addOpt('-houghLines', $geometry );
	}


	/**
	 * Implements the discrete Fourier transform (DFT).
	 */
	public function fft()
	{
		return $this->addOpt('-fft');
	}


	/**
	 * Flip image vertically.
	 */
	public function flip()
	{
		return $this->addOpt('-flip');
	}


	/**
	 * Floodfill the image with color.
	 * @param $geometry string Geometry
	 * @param $color string Color
	 */
	public function floodfill($geometry, $color)
	{
		return $this->addOpt('-floodfill', $geometry." ".$color );
	}


	/**
	 * Flop image horizontally.
	 */
	public function flop()
	{
		return $this->addOpt('-flop');
	}


	/**
	 * Surround image with an ornamental border.
	 * @param $geometry string Geometry
	 */
	public function frame($geometry)
	{
		return $this->addOpt('-frame', $geometry );
	}


	/**
	 * Level of gamma correction.
	 * @param $value string Value
	 */
	public function gamma($value)
	{
		return $this->addOpt('-gamma', $value );
	}


	/**
	 * Reduce image noise and reduce detail levels.
	 * @param $geometry string Geometry
	 */
	public function gaussianBlur($geometry)
	{
		return $this->addOpt('-gaussianBlur', $geometry );
	}


	/**
	 * Preferred size or location of the image.
	 * @param $geometry string Geometry
	 */
	public function geometry($geometry)
	{
		return $this->addOpt('-geometry', $geometry );
	}


	/**
	 * Convert image to grayscale.
	 * @param $method string Method
	 */
	public function grayscale($method)
	{
		return $this->addOpt('-grayscale', $method );
	}


	/**
	 * Print program options.
	 */
	public function help()
	{
		return $this->addOpt('-help');
	}


	/**
	 * Identify the format and characteristics of the image.
	 */
	public function identify()
	{
		return $this->addOpt('-identify');
	}


	/**
	 * Implements the inverse discrete Fourier transform (DFT).
	 */
	public function ift()
	{
		return $this->addOpt('-ift');
	}


	/**
	 * Implode image pixels about the center.
	 * @param $amount string Amount
	 */
	public function implode($amount)
	{
		return $this->addOpt('-implode', $amount );
	}


	/**
	 * Edge preserving noise reduction filter.
	 * @param $geometry string Geometry
	 */
	public function kuwahara($geometry)
	{
		return $this->addOpt('-kuwahara', $geometry );
	}


	/**
	 * Local adaptive thresholding.
	 * @param $geometry string Geometry
	 */
	public function lat($geometry)
	{
		return $this->addOpt('-lat', $geometry );
	}


	/**
	 * Optimize, merge, or compare image layers.
	 * @param $method string Method
	 */
	public function layers($method)
	{
		return $this->addOpt('-layers', $method );
	}


	/**
	 * Adjust the level of image contrast.
	 * @param $value string Value
	 */
	public function level($value)
	{
		return $this->addOpt('-level', $value );
	}


	/**
	 * Level image with the given colors.
	 * @param $color_color string 'color,color'
	 */
	public function levelColors($color_color)
	{
		return $this->addOpt('-levelColors', $color_color );
	}


	/**
	 * Improve contrast by `stretching with saturation'.
	 * @param $geometry string Geometry
	 */
	public function linearStretch($geometry)
	{
		return $this->addOpt('-linearStretch', $geometry );
	}


	/**
	 * Rescale image with seam-carving.
	 * @param $geometry string Geometry
	 */
	public function liquidRescale($geometry)
	{
		return $this->addOpt('-liquidRescale', $geometry );
	}


	/**
	 * Enhance local contrast.
	 * @param $geometry string Geometry
	 */
	public function localContrast($geometry)
	{
		return $this->addOpt('-localContrast', $geometry );
	}


	/**
	 * Double the size of the image with pixel art scaling.
	 */
	public function magnify()
	{
		return $this->addOpt('-magnify');
	}


	/**
	 * Delineate arbitrarily shaped clusters in the image.
	 * @param $geometry string Geometry
	 */
	public function meanShift($geometry)
	{
		return $this->addOpt('-meanShift', $geometry );
	}


	/**
	 * Apply a median filter to the image.
	 * @param $geometry string Geometry
	 */
	public function median($geometry)
	{
		return $this->addOpt('-median', $geometry );
	}


	/**
	 * Neighborhood.
	 * @param $geometry string Geometry
	 */
	public function mode($geometry)
	{
		return $this->addOpt('-mode', $geometry );
	}


	/**
	 * Vary the brightness, saturation, and hue.
	 * @param $value string Value
	 */
	public function modulate($value)
	{
		return $this->addOpt('-modulate', $value );
	}


	/**
	 * Transform image to black and white.
	 */
	public function monochrome()
	{
		return $this->addOpt('-monochrome');
	}


	/**
	 * Simulate motion blur.
	 * @param $geometry string Geometry
	 */
	public function motionBlur($geometry)
	{
		return $this->addOpt('-motionBlur', $geometry );
	}


	/**
	 * Replace every pixel with its complementary color.
	 */
	public function negate()
	{
		return $this->addOpt('-negate');
	}


	/**
	 * Add or reduce noise in an image.
	 * @param $geometry string Geometry
	 */
	public function noise($geometry)
	{
		return $this->addOpt('-noise', $geometry );
	}


	/**
	 * Transform image to span the full range of colors.
	 */
	public function normalize()
	{
		return $this->addOpt('-normalize');
	}


	/**
	 * Change this color to the fill color.
	 * @param $color string Color
	 */
	public function opaque($color)
	{
		return $this->addOpt('-opaque', $color );
	}


	/**
	 * Add a noise pattern to the image with specific  amplitudes.
	 * @param $NxN string NxN
	 */
	public function orderedDither($NxN)
	{
		return $this->addOpt('-orderedDither', $NxN );
	}


	/**
	 * Simulate an oil painting.
	 * @param $radius string Radius
	 */
	public function paint($radius)
	{
		return $this->addOpt('-paint', $radius );
	}


	/**
	 * Pixel value less than |epsilon| become epsilon or  -epsilon.
	 * @param $epsilon string Epsilon
	 */
	public function perceptible($epsilon)
	{
		return $this->addOpt('-perceptible', $epsilon );
	}


	/**
	 * Simulate a Polaroid picture.
	 * @param $angle string Angle
	 */
	public function polaroid($angle)
	{
		return $this->addOpt('-polaroid', $angle );
	}


	/**
	 * Reduce the image to a limited number of color levels.
	 * @param $levels string Levels
	 */
	public function posterize($levels)
	{
		return $this->addOpt('-posterize', $levels );
	}


	/**
	 * Add, delete, or apply an image profile.
	 * @param $filename string Filename
	 */
	public function profile($filename)
	{
		return $this->addOpt('-profile', $filename );
	}


	/**
	 * Reduce colors in this colorspace.
	 * @param $colorspace string Colorspace
	 */
	public function quantize($colorspace)
	{
		return $this->addOpt('-quantize', $colorspace );
	}


	/**
	 * Radial blur the image.
	 * @param $angle string Angle
	 */
	public function radialBlur($angle)
	{
		return $this->addOpt('-radialBlur', $angle );
	}


	/**
	 * Lighten/darken image edges to create a 3-D effect.
	 * @param $value string Value
	 */
	public function raise($value)
	{
		return $this->addOpt('-raise', $value );
	}


	/**
	 * Random threshold the image.
	 * @param $low_high string 'low,high'
	 */
	public function randomThreshold($low_high)
	{
		return $this->addOpt('-randomThreshold', $low_high );
	}


	/**
	 * Apply options to a portion of the image.
	 * @param $geometry string Geometry
	 */
	public function region($geometry)
	{
		return $this->addOpt('-region', $geometry );
	}


	/**
	 * Render vector graphics.
	 */
	public function render()
	{
		return $this->addOpt('-render');
	}


	/**
	 * Change the resolution of an image.
	 * @param $geometry string Geometry
	 */
	public function resample($geometry)
	{
		return $this->addOpt('-resample', $geometry );
	}


	/**
	 * Resize the image.
	 * @param $geometry string Geometry
	 */
	public function resize($geometry)
	{
		return $this->addOpt('-resize', $geometry );
	}


	/**
	 * Roll an image vertically or horizontally.
	 * @param $geometry string Geometry
	 */
	public function roll($geometry)
	{
		return $this->addOpt('-roll', $geometry );
	}


	/**
	 * Apply Paeth rotation to the image.
	 * @param $degrees string Degrees
	 */
	public function rotate($degrees)
	{
		return $this->addOpt('-rotate', $degrees );
	}


	/**
	 * Scale image with pixel sampling.
	 * @param $geometry string Geometry
	 */
	public function sample($geometry)
	{
		return $this->addOpt('-sample', $geometry );
	}


	/**
	 * Scale the image.
	 * @param $geometry string Geometry
	 */
	public function scale($geometry)
	{
		return $this->addOpt('-scale', $geometry );
	}


	/**
	 * Segment an image.
	 * @param $values string Values
	 */
	public function segment($values)
	{
		return $this->addOpt('-segment', $values );
	}


	/**
	 * Selectively blur pixels within a contrast threshold.
	 * @param $geometry string Geometry
	 */
	public function selectiveBlur($geometry)
	{
		return $this->addOpt('-selectiveBlur', $geometry );
	}


	/**
	 * Simulate a sepia-toned photo.
	 * @param $threshold string Threshold
	 */
	public function sepiaTone($threshold)
	{
		return $this->addOpt('-sepiaTone', $threshold );
	}


	/**
	 * Set an image property.
	 * @param $property string Property
	 * @param $value string Value
	 */
	public function set($property, $value)
	{
		return $this->addOpt('-set', $property." ".$value );
	}


	/**
	 * Shade the image using a distant light source.
	 * @param $degrees string Degrees
	 */
	public function shade($degrees)
	{
		return $this->addOpt('-shade', $degrees );
	}


	/**
	 * Simulate an image shadow.
	 * @param $geometry string Geometry
	 */
	public function shadow($geometry)
	{
		return $this->addOpt('-shadow', $geometry );
	}


	/**
	 * Sharpen the image.
	 * @param $geometry string Geometry
	 */
	public function sharpen($geometry)
	{
		return $this->addOpt('-sharpen', $geometry );
	}


	/**
	 * Shave pixels from the image edges.
	 * @param $geometry string Geometry
	 */
	public function shave($geometry)
	{
		return $this->addOpt('-shave', $geometry );
	}


	/**
	 * Slide one edge of the image along the X or Y axis.
	 * @param $geometry string Geometry
	 */
	public function shear($geometry)
	{
		return $this->addOpt('-shear', $geometry );
	}


	/**
	 * Increase the contrast without saturating highlights or  shadows.
	 * @param $geometry string Geometry
	 */
	public function sigmoidalContrast($geometry)
	{
		return $this->addOpt('-sigmoidalContrast', $geometry );
	}


	/**
	 * Simulate a pencil sketch.
	 * @param $geometry string Geometry
	 */
	public function sketch($geometry)
	{
		return $this->addOpt('-sketch', $geometry );
	}


	/**
	 * Negate all pixels above the threshold level.
	 * @param $threshold string Threshold
	 */
	public function solarize($threshold)
	{
		return $this->addOpt('-solarize', $threshold );
	}


	/**
	 * Fill in a image based on a few color points.
	 * @param $method string Method
	 * @param $args string Args
	 */
	public function sparseColor($method, $args)
	{
		return $this->addOpt('-sparseColor', $method." ".$args );
	}


	/**
	 * Splice the background color into the image.
	 * @param $geometry string Geometry
	 */
	public function splice($geometry)
	{
		return $this->addOpt('-splice', $geometry );
	}


	/**
	 * Displace image pixels by a random amount.
	 * @param $radius string Radius
	 */
	public function spread($radius)
	{
		return $this->addOpt('-spread', $radius );
	}


	/**
	 * Replace each pixel with corresponding statistic from the neighborhood.
	 * @param $type string Type
	 * @param $radius string Radius
	 */
	public function statistic($type, $radius)
	{
		return $this->addOpt('-statistic', $type." ".$radius );
	}


	/**
	 * Strip image of all profiles and comments.
	 */
	public function strip()
	{
		return $this->addOpt('-strip');
	}


	/**
	 * Swirl image pixels about the center.
	 * @param $degrees string Degrees
	 */
	public function swirl($degrees)
	{
		return $this->addOpt('-swirl', $degrees );
	}


	/**
	 * Threshold the image.
	 * @param $value string Value
	 */
	public function threshold($value)
	{
		return $this->addOpt('-threshold', $value );
	}


	/**
	 * Create a thumbnail of the image.
	 * @param $geometry string Geometry
	 */
	public function thumbnail($geometry)
	{
		return $this->addOpt('-thumbnail', $geometry );
	}


	/**
	 * Tile image when filling a graphic primitive.
	 * @param $filename string Filename
	 */
	public function tile($filename)
	{
		return $this->addOpt('-tile', $filename );
	}


	/**
	 * Tint the image with the fill color.
	 * @param $value string Value
	 */
	public function tint($value)
	{
		return $this->addOpt('-tint', $value );
	}


	/**
	 * Affine transform image.
	 */
	public function transform()
	{
		return $this->addOpt('-transform');
	}


	/**
	 * Make this color transparent within the image.
	 * @param $color string Color
	 */
	public function transparent($color)
	{
		return $this->addOpt('-transparent', $color );
	}


	/**
	 * Flip image vertically and rotate 90 degrees.
	 */
	public function transpose()
	{
		return $this->addOpt('-transpose');
	}


	/**
	 * Flop image horizontally and rotate 270 degrees.
	 */
	public function transverse()
	{
		return $this->addOpt('-transverse');
	}


	/**
	 * Trim image edges.
	 */
	public function trim()
	{
		return $this->addOpt('-trim');
	}


	/**
	 * Image type.
	 * @param $type string Type
	 */
	public function type($type)
	{
		return $this->addOpt('-type', $type );
	}


	/**
	 * Discard all but one of any pixel color.
	 */
	public function uniqueColors()
	{
		return $this->addOpt('-uniqueColors');
	}


	/**
	 * Sharpen the image.
	 * @param $geometry string Geometry
	 */
	public function unsharp($geometry)
	{
		return $this->addOpt('-unsharp', $geometry );
	}


	/**
	 * Soften the edges of the image in vignette style.
	 * @param $geometry string Geometry
	 */
	public function vignette($geometry)
	{
		return $this->addOpt('-vignette', $geometry );
	}


	/**
	 * Alter an image along a sine wave.
	 * @param $geometry string Geometry
	 */
	public function wave($geometry)
	{
		return $this->addOpt('-wave', $geometry );
	}


	/**
	 * Removes noise from the image using a wavelet transform.
	 * @param $threshold string Threshold
	 */
	public function waveletDenoise($threshold)
	{
		return $this->addOpt('-waveletDenoise', $threshold );
	}


	/**
	 * Force all pixels above the threshold into white.
	 * @param $value string Value
	 */
	public function whiteThreshold($value)
	{
		return $this->addOpt('-whiteThreshold', $value );
	}


	/**
	 * Transform image colors to match this set of colors.
	 * @param $filename string Filename
	 */
	public function affinity($filename)
	{
		return $this->addOpt('-affinity', $filename );
	}


	/**
	 * Append an image sequence.
	 */
	public function append()
	{
		return $this->addOpt('-append');
	}


	/**
	 * Apply a color lookup table to the image.
	 */
	public function clut()
	{
		return $this->addOpt('-clut');
	}


	/**
	 * Merge a sequence of images.
	 */
	public function coalesce()
	{
		return $this->addOpt('-coalesce');
	}


	/**
	 * Combine a sequence of images.
	 */
	public function combine()
	{
		return $this->addOpt('-combine');
	}


	/**
	 * Mathematically and visually annotate the difference between an image and its reconstruction.
	 */
	public function compare()
	{
		return $this->addOpt('-compare');
	}


	/**
	 * Perform complex mathematics on an image sequence.
	 * @param $operator string Operator
	 */
	public function complex($operator)
	{
		return $this->addOpt('-complex', $operator );
	}


	/**
	 * Composite image.
	 */
	public function composite()
	{
		return $this->addOpt('-composite');
	}


	/**
	 * Copy pixels from one area of an image to another.
	 * @param $geometry string Geometry
	 * @param $offset string Offset
	 */
	public function copy($geometry, $offset)
	{
		return $this->addOpt('-copy', $geometry." ".$offset );
	}


	/**
	 * Cut out a rectangular region of the image.
	 * @param $geometry string Geometry
	 */
	public function crop($geometry)
	{
		return $this->addOpt('-crop', $geometry );
	}


	/**
	 * Break down an image sequence into constituent parts.
	 */
	public function deconstruct()
	{
		return $this->addOpt('-deconstruct');
	}


	/**
	 * Evaluate an arithmetic, relational, or logical expression.
	 * @param $operator string Operator
	 */
	public function evaluateSequence($operator)
	{
		return $this->addOpt('-evaluateSequence', $operator );
	}


	/**
	 * Apply mathematical expression to an image channel(s).
	 * @param $expression string Expression
	 */
	public function fx($expression)
	{
		return $this->addOpt('-fx', $expression );
	}


	/**
	 * Apply a Hald color lookup table to the image.
	 */
	public function haldClut()
	{
		return $this->addOpt('-haldClut');
	}


	/**
	 * Morph an image sequence.
	 * @param $value string Value
	 */
	public function morph($value)
	{
		return $this->addOpt('-morph', $value );
	}


	/**
	 * Create a mosaic from an image sequence.
	 */
	public function mosaic()
	{
		return $this->addOpt('-mosaic');
	}


	/**
	 * Terms (coefficients and degree pairs)..
	 * @param $terms string Terms
	 */
	public function poly($terms)
	{
		return $this->addOpt('-poly', $terms );
	}


	/**
	 * Interpret string and print to console.
	 * @param $string string String
	 */
	public function print($string)
	{
		return $this->addOpt('-print', $string );
	}


	/**
	 * Process the image with a custom image filter.
	 * @param $arguments string Arguments
	 */
	public function process($arguments)
	{
		return $this->addOpt('-process', $arguments );
	}


	/**
	 * Separate an image channel into a grayscale image.
	 */
	public function separate()
	{
		return $this->addOpt('-separate');
	}


	/**
	 * Smush an image sequence together.
	 * @param $geometry string Geometry
	 */
	public function smush($geometry)
	{
		return $this->addOpt('-smush', $geometry );
	}


	/**
	 * @param $filename string Filename
	 */
	public function write($filename)
	{
		return $this->addOpt('-write', $filename );
	}


	/**
	 * Delete the image from the image sequence.
	 * @param $indexes string Indexes
	 */
	public function delete($indexes)
	{
		return $this->addOpt('-delete', $indexes );
	}


	/**
	 * Duplicate an image one or more times.
	 * @param $count_indexes string 'count,indexes'
	 */
	public function duplicate($count_indexes)
	{
		return $this->addOpt('-duplicate', $count_indexes );
	}


	/**
	 * Insert last image into the image sequence.
	 * @param $index string Index
	 */
	public function insert($index)
	{
		return $this->addOpt('-insert', $index );
	}


	/**
	 * Reverse image sequence.
	 */
	public function reverse()
	{
		return $this->addOpt('-reverse');
	}


	/**
	 * @param $indexes string Indexes
	 */
	public function swap($indexes)
	{
		return $this->addOpt('-swap', $indexes );
	}


	/**
	 * Display copious debugging information.
	 * @param $events string Events
	 */
	public function debug($events)
	{
		return $this->addOpt('-debug', $events );
	}


	/**
	 * Distributed pixel cache spanning one or more servers.
	 * @param $port string Port
	 */
	public function distributeCache($port)
	{
		return $this->addOpt('-distributeCache', $port );
	}


	/**
	 * Print a list of supported option arguments.
	 * @param $type string Type
	 */
	public function list($type)
	{
		return $this->addOpt('-list', $type );
	}


	/**
	 * Format of debugging information.
	 * @param $format string Format
	 */
	public function log($format)
	{
		return $this->addOpt('-log', $format );
	}


	public function version()
	{
		return $this->addOpt('-version');
	}
}
