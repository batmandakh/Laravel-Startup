<?php namespace Hex\CommandBus;

class CommandNameInflector {

	/**
	 * Коммандын Handler-ийг олох буюу дуудах функц
	 *
	 * @param Hex\CommandInterface $command
	 * @return string
	 */
	public function getHandlerName(CommandInterface $command)
	{
		return str_replace('Command', 'Handler', get_class($command));
	}
}