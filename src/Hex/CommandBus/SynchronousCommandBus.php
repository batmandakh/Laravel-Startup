<?php namespace Hex\CommandBus;

// Laravel-ийн Контейнер классын тарина...
use Illuminate\Container\Contaier;

class SynchronousCommandBus implements CommandBusInterface {

	use CommandBusTrait;
	
	private $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	/**
	 * Ирсэн тушаал буюу коммандын Handler-ийг олоод ажиллуулах функц
	 * @param \Hex\CommandBus\CommandInterface $command
	 */
	public function execute(CommandInterface $command)
	{
		return $this->getHandler($command)->handle($command);
	}

	/**
	 * Тушаал буюу коммандын Handler-ийг олох функц
	 * @param \Hex\CommandBus\CommandInterface $command
	 * @return Command Handler
	 */
	private function getHandler($command)
	{
		return $this->container->make( $this->resolveHandler($command) );
	}
}