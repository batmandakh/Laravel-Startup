<?php namespace Hex\Event;

interface EventInterface {
	
	/**
	 * Event-ийн нэрийг буцаах функц
	 * @return string
	 */
	public function name();
}