<?php
/*
 * Ider is very simple ID creator.
 *
 * @author Ömer Kala <kalaomer@hotmail.com>
 */

class Ider {

	/**
	 * getID is create ID for any value.
	 *
	 * @param mixed $value
	 * @param string $algo
	 * @return string
	 */
	Public static function getID( $value, $algo = "md5" )
	{
		if ( is_object( $value ) )
		{
			return spl_object_hash( $value );
		}

		return hash($algo, $value);
	}

	/**
	 * Checking ID and Value.
	 *
	 * @param string $id
	 * @param mixed value
	 * @return boolean
	 */
	Public static function check( $id, $value )
	{
		return $id == self::getID( $value );
	}
}