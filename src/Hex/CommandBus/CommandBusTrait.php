<?php namespace Hex\CommandBus;

trait CommandBusTrait {

	/**
	 * Коммандын Handler-ийг нэрийг олох буюу тодорхойлох функц
	 *
	 * @param \Hex\CommandBus\CommandInterface $command
	 * @return string
	 */
	public function resolveHandler(CommandInterface $command)
	{
		return str_replace('Command', 'Handler', get_class($command));
	}
}