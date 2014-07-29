<?php namespace Hex\Decorations\Validator;

use Exception;
use Illuminate\Support\MessageBag;
class ValidationException extends Exception {

	/**
	 * @var \Illuminate\Support\MessageBag
	 */
	protected $errors;

	/**
	 * @param \Illuminate\Support\MessageBag $errors
	 * @param String $message
	 * @param Integer $code
	 * @param Mixed $previous
	 * 
	 * @return Void
	 */
	public function __construct(MessageBag $errors, $message='', $code=0, $previous=null)
	{
		$this->errors = $errors;

		parent::__construct($message, $code, $previous);
	}

	/**
	 * @return \Illuminate\Support\MessageBag
	 */
	public function getErrors()
	{
		return $this->errors;
	}
}