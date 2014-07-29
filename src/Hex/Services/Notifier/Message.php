<?php namespace Hex\Services\Notifier;

class Massage {

	/**
	 * @var Array $to
	 */
	protected $to = [];

	/**
	 * @var $from
	 */
	protected $from;

	/**
	 * @var $formattedMessage
	 */
	protected $formattedMessage;

	/**
	 * @var $plainMessage
	 */
	protected $plainMessage;

	/**
	 * Мессеж классын байгуулагч функц
	 * @param Array $to
	 * @param $from
	 * @param String $formattedMessage
	 * @param String $plainMessage
	 * 
	 * @return Void
	 */
	public function __construct($to, $from, $formattedMessage, $plainMessage = '')
	{
		if( ! is_array($to) )
		{
			$to = [$to];
		}

		$this->to = $to;
		$this->from = $from;
		$this->formattedMessage = $formattedMessage;
		$this->plainMessage = $plainMessage;
	}
}