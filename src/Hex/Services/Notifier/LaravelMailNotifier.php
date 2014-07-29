<?php namespace Hex\Services\Notifier

use Mailer as LaravelMailer;
// эсвэл
// use Illuminate\Mail\Mailer as LaravelMailer;

class LaravelMailNotifier implements NotifierInterface {

	private $mailer;

	public function __construct(LaravelMailer $mailer)
	{
		$this->mailer = $mailer;
	}
	
	public function notify(Message $message)
	{
		// TODO: Laravel-ийн Mailer-ийг ашигласан мэйл мэдэгдэл илгээгчийн implementation
		// $this->mailer['to'] = $message['to'];
		// $this->mailer['from'] = $message['from'];
		// $this->mailer['subject'] = 'Notification from AppName';
		// $this->mailer['message'] = $message['formattedMessage'];
		// $this->mailer->send($message);
	}
}