<?php namespace Hex\CommandBus;

// Laravel-ийн IoC контейнерийг хэрэглэнэ.
use Illuminate\Container\Container;

// CommandBus класс нь CommandBusInterface-ийн хэрэгжүүлэх нэг адаптер юм.
class CommandBus implements CommandBusInterface {

	/**
	 * @var \Illuminate\Container\Container
	 */
	private $container;

	/**
	 * @var CommandNameInflector
	 */
	private $inflector;
	// эсвэл
	// use CommandBusTrait;

	/**
	 * CommandBus-ийн байгуулагч функц
	 * @param \Illuminate\Container\Container $container
	 * @param \Hex\CommandBus\CommandNameInflector @inflector
	 */
	public function __construct(Container $container, CommandNameInflector $inflector)
	{
		$this->container = $container;
		$this->inflector = $inflector;
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
		return $this->container->make( $this->inflector->getHandlerName($command) );
		// эсвэл
		// return $this->container->make( $this->resolveHandler($command) );
	}
}