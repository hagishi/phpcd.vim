<?php

class Validator extends \Illuminate\Support\Facades\Validator
{

	/**
	 * Create a new Validator instance.
	 *
	 * @param array $data
	 * @param array $rules
	 * @param array $messages
	 * @param array $customAttributes
	 * @return \Illuminate\Validation\Validator 
	 * @static 
	 */
	public static function make($data, $rules, $messages = array(), $customAttributes = array()){
		return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
	}

	/**
	 * Register a custom validator extension.
	 *
	 * @param string $rule
	 * @param \Closure|string $extension
	 * @param string $message
	 * @return void 
	 * @static 
	 */
	public static function extend($rule, $extension, $message = null){
		\Illuminate\Validation\Factory::extend($rule, $extension, $message);
	}

	/**
	 * Register a custom implicit validator extension.
	 *
	 * @param string $rule
	 * @param \Closure|string $extension
	 * @param string $message
	 * @return void 
	 * @static 
	 */
	public static function extendImplicit($rule, $extension, $message = null){
		\Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
	}

	/**
	 * Register a custom implicit validator message replacer.
	 *
	 * @param string $rule
	 * @param \Closure|string $replacer
	 * @return void 
	 * @static 
	 */
	public static function replacer($rule, $replacer){
		\Illuminate\Validation\Factory::replacer($rule, $replacer);
	}

	/**
	 * Set the Validator instance resolver.
	 *
	 * @param \Closure $resolver
	 * @return void 
	 * @static 
	 */
	public static function resolver($resolver){
		\Illuminate\Validation\Factory::resolver($resolver);
	}

	/**
	 * Get the Translator implementation.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface 
	 * @static 
	 */
	public static function getTranslator(){
		return \Illuminate\Validation\Factory::getTranslator();
	}

	/**
	 * Get the Presence Verifier implementation.
	 *
	 * @return \Illuminate\Validation\PresenceVerifierInterface 
	 * @static 
	 */
	public static function getPresenceVerifier(){
		return \Illuminate\Validation\Factory::getPresenceVerifier();
	}

	/**
	 * Set the Presence Verifier implementation.
	 *
	 * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
	 * @return void 
	 * @static 
	 */
	public static function setPresenceVerifier($presenceVerifier){
		\Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
	}

}
