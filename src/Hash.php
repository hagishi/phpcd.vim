<?php


class Hash extends \Illuminate\Support\Facades\Hash
{

	/**
	 * Hash the given value.
	 *
	 * @param string $value
	 * @param array $options
	 * @return string 
	 * @throws \RuntimeException
	 * @static 
	 */
	public static function make($value, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::make($value, $options);
	}

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param string $value
	 * @param string $hashedValue
	 * @param array $options
	 * @return bool 
	 * @static 
	 */
	public static function check($value, $hashedValue, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
	}

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param string $hashedValue
	 * @param array $options
	 * @return bool 
	 * @static 
	 */
	public static function needsRehash($hashedValue, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	}

	/**
	 * Set the default password work factor.
	 *
	 * @param int $rounds
	 * @return $this 
	 * @static 
	 */
	public static function setRounds($rounds){
		return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
	}

}
