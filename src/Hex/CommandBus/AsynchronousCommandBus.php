<?php namespace Hex\CommandBus;

use Illuminate\Container\Container;

class AsynchronousCommandBus implements CommandBusInterface {

	use CommandBusTrait;
	
	private $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}
}