<?php namespace Hex\CommandBus;

// CommandBus-ийн интерфейс буюу порт
interface CommandBusInterface {

	/**
	 * CommandBus интерфейсийн хэрэгжүүлэлт буюу implementation-үүд нь
	 * заавал execute гэсэн method-той байх ёстой.
	 * @param Hex\CommandInterface $command
	 */
	public function execute(CommandInterface $command);
}