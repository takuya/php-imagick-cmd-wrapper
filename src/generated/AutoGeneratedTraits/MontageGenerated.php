<?php

/**
 * Auto generated from 'montage -h' help
 */
trait MontageGenerated
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
	 * Decipher image with this password.
	 * @param $password string Password
	 */
	public function authenticate($password)
	{
		return $this->addOpt('-authenticate', $password );
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
	 * Alternate image colorsapce.
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
	 * Composite operator.
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
	 * Define one or more image format options.
	 * @param $format_option string 'format:option'
	 */
	public function define($format_option)
	{
		return $this->addOpt('-define', $format_option );
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
	 * Query font from this X server.
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
	 * Annotate the image with a graphic primitive.
	 * @param $string string String
	 */
	public function draw($string)
	{
		return $this->addOpt('-draw', $string );
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
	 * Extract area from image.
	 * @param $geometry string Geometry
	 */
	public function extract($geometry)
	{
		return $this->addOpt('-extract', $geometry );
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
	 * Level of gamma correction.
	 * @param $value string Value
	 */
	public function gamma($value)
	{
		return $this->addOpt('-gamma', $value );
	}


	/**
	 * Preferred tile and border sizes.
	 * @param $geometry string Geometry
	 */
	public function geometry($geometry)
	{
		return $this->addOpt('-geometry', $geometry );
	}


	/**
	 * Which direction to gravitate towards.
	 * @param $direction string Direction
	 */
	public function gravity($direction)
	{
		return $this->addOpt('-gravity', $direction );
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
	 * Identify the format and characteristics of the image.
	 */
	public function identify()
	{
		return $this->addOpt('-identify');
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
	 * Pixel color interpolation method.
	 * @param $method string Method
	 */
	public function interpolate($method)
	{
		return $this->addOpt('-interpolate', $method );
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
	 * Framing style.
	 * @param $type string Type
	 */
	public function mode($type)
	{
		return $this->addOpt('-mode', $type );
	}


	/**
	 * Monitor progress.
	 */
	public function monitor()
	{
		return $this->addOpt('-monitor');
	}


	/**
	 * Image origin.
	 * @param $geometry string Geometry
	 */
	public function origin($geometry)
	{
		return $this->addOpt('-origin', $geometry );
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
	 * Font point size.
	 * @param $value string Value
	 */
	public function pointsize($value)
	{
		return $this->addOpt('-pointsize', $value );
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
	 * JPEG/MIFF/PNG compression level.
	 * @param $value string Value
	 */
	public function quality($value)
	{
		return $this->addOpt('-quality', $value );
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
	 * Size and location of an image canvas (operator).
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
	 * Image scene range.
	 * @param $range string Range
	 */
	public function scenes($range)
	{
		return $this->addOpt('-scenes', $range );
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
	 * Set an image attribute.
	 * @param $attribute string Attribute
	 * @param $value string Value
	 */
	public function set($attribute, $value)
	{
		return $this->addOpt('-set', $attribute." ".$value );
	}


	/**
	 * Add a shadow beneath a tile to simulate depth.
	 */
	public function shadow()
	{
		return $this->addOpt('-shadow');
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
	 * Color to use when stroking a graphic primitive.
	 * @param $color string Color
	 */
	public function stroke($color)
	{
		return $this->addOpt('-stroke', $color );
	}


	/**
	 * Resize support: > 1.0 is blurry, < 1.0 is sharp.
	 * @param $factor string Factor
	 */
	public function support($factor)
	{
		return $this->addOpt('-support', $factor );
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
	 * Create a thumbnail of the image.
	 * @param $geometry string Geometry
	 */
	public function thumbnail($geometry)
	{
		return $this->addOpt('-thumbnail', $geometry );
	}


	/**
	 * Number of tiles per row and column.
	 * @param $geometry string Geometry
	 */
	public function tile($geometry)
	{
		return $this->addOpt('-tile', $geometry );
	}


	/**
	 * Decorate the montage image with a title.
	 * @param $string string String
	 */
	public function title($string)
	{
		return $this->addOpt('-title', $string );
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
	 * Color tree depth.
	 * @param $value string Value
	 */
	public function treedepth($value)
	{
		return $this->addOpt('-treedepth', $value );
	}


	/**
	 * Trim image edges.
	 */
	public function trim()
	{
		return $this->addOpt('-trim');
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
	 * Virtual pixel access method.
	 * @param $method string Method
	 */
	public function virtualPixel($method)
	{
		return $this->addOpt('-virtualPixel', $method );
	}


	/**
	 * @param $point string Point
	 */
	public function whitePoint($point)
	{
		return $this->addOpt('-whitePoint', $point );
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
	 * Automagically orient image.
	 */
	public function autoOrient()
	{
		return $this->addOpt('-autoOrient');
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
	 * Preferred size and location of the cropped image.
	 * @param $geometry string Geometry
	 */
	public function crop($geometry)
	{
		return $this->addOpt('-crop', $geometry );
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
	 * Flatten a sequence of images.
	 */
	public function flatten()
	{
		return $this->addOpt('-flatten');
	}


	/**
	 * Flip image in the vertical direction.
	 */
	public function flip()
	{
		return $this->addOpt('-flip');
	}


	/**
	 * Flop image in the horizontal direction.
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
	 * Transform image to black and white.
	 */
	public function monochrome()
	{
		return $this->addOpt('-monochrome');
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
	 * Resize the image.
	 * @param $geometry string Geometry
	 */
	public function resize($geometry)
	{
		return $this->addOpt('-resize', $geometry );
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
	 * Scale the image.
	 * @param $geometry string Geometry
	 */
	public function scale($geometry)
	{
		return $this->addOpt('-scale', $geometry );
	}


	/**
	 * Strip image of all profiles and comments.
	 */
	public function strip()
	{
		return $this->addOpt('-strip');
	}


	/**
	 * Affine transform image.
	 */
	public function transform()
	{
		return $this->addOpt('-transform');
	}


	/**
	 * Flip image vertically and rotate 90 degrees.
	 */
	public function transpose()
	{
		return $this->addOpt('-transpose');
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
	 * Image type.
	 * @param $type string Type
	 */
	public function type($type)
	{
		return $this->addOpt('-type', $type );
	}


	/**
	 * @param $geometry string Geometry
	 */
	public function unsharp($geometry)
	{
		return $this->addOpt('-unsharp', $geometry );
	}


	/**
	 * Merge a sequence of images.
	 */
	public function coalesce()
	{
		return $this->addOpt('-coalesce');
	}


	public function composite()
	{
		return $this->addOpt('-composite');
	}


	/**
	 * Clone an image.
	 * @param $indexes string Indexes
	 */
	public function clone($indexes)
	{
		return $this->addOpt('-clone', $indexes );
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
	 * Print program options.
	 */
	public function help()
	{
		return $this->addOpt('-help');
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
