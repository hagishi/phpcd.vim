<?php

class Crypt extends \Illuminate\Support\Facades\Crypt
{

	/**
	 * Determine if the given key and cipher combination is valid.
	 *
	 * @param string $key
	 * @param string $cipher
	 * @return bool 
	 * @static 
	 */
	public static function supported($key, $cipher){
		return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
	}

	/**
	 * Encrypt the given value.
	 *
	 * @param string $value
	 * @return string 
	 * @throws \Illuminate\Contracts\Encryption\EncryptException
	 * @static 
	 */
	public static function encrypt($value){
		return \Illuminate\Encryption\Encrypter::encrypt($value);
	}

	/**
	 * Decrypt the given value.
	 *
	 * @param string $payload
	 * @return string 
	 * @throws \Illuminate\Contracts\Encryption\DecryptException
	 * @static 
	 */
	public static function decrypt($payload){
		return \Illuminate\Encryption\Encrypter::decrypt($payload);
	}

}
