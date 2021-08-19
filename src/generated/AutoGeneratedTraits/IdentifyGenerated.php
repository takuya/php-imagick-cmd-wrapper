<?php

/**
 * Auto generated from 'identify -h' help
 */
trait IdentifyGenerated
{
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
	 * Apply option to select image channels.
	 * @param $type string Type
	 */
	public function channel($type)
	{
		return $this->addOpt('-channel', $type );
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
	 * Alternate image colorspace.
	 * @param $type string Type
	 */
	public function colorspace($type)
	{
		return $this->addOpt('-colorspace', $type );
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
	 * Analyze image features (e.g. contrast, correlation).
	 * @param $distance string Distance
	 */
	public function features($distance)
	{
		return $this->addOpt('-features', $distance );
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
	 * Colors within this distance are considered equal.
	 * @param $distance string Distance
	 */
	public function fuzz($distance)
	{
		return $this->addOpt('-fuzz', $distance );
	}


	/**
	 * Of gamma correction.
	 * @param $value string Value
	 */
	public function gamma($value)
	{
		return $this->addOpt('-gamma', $value );
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
	 * Pixel cache resource limit.
	 * @param $type string Type
	 * @param $value string Value
	 */
	public function limit($type, $value)
	{
		return $this->addOpt('-limit', $type." ".$value );
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
	 * Report image moments.
	 */
	public function moments()
	{
		return $this->addOpt('-moments');
	}


	/**
	 * Monitor progress.
	 */
	public function monitor()
	{
		return $this->addOpt('-monitor');
	}


	/**
	 * Efficiently determine image attributes.
	 */
	public function ping()
	{
		return $this->addOpt('-ping');
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
	 * Suppress all warning messages.
	 */
	public function quiet()
	{
		return $this->addOpt('-quiet');
	}


	/**
	 * Pay attention to warning messages.
	 */
	public function regardWarnings()
	{
		return $this->addOpt('-regardWarnings');
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
	 * Width and height of image.
	 * @param $geometry string Geometry
	 */
	public function size($geometry)
	{
		return $this->addOpt('-size', $geometry );
	}


	/**
	 * Strip image of all profiles and comments.
	 */
	public function strip()
	{
		return $this->addOpt('-strip');
	}


	/**
	 * Display the number of unique colors in the image.
	 */
	public function unique()
	{
		return $this->addOpt('-unique');
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
	 * Convert image to grayscale.
	 * @param $method string Method
	 */
	public function grayscale($method)
	{
		return $this->addOpt('-grayscale', $method );
	}


	public function negate()
	{
		return $this->addOpt('-negate');
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
