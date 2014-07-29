<?php namespace Hex\Services\Notifier;

interface NotifierInterface {
	
	// Аль нэршил нь илүү дээр вэ?
	// public function send(Message $message);
	public function notify(Message $message);
}