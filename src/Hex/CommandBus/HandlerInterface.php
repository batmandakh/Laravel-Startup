<?php namespace Hex\CommandBus;

interface HandlerInterface {

	/**
	 * Тушаал буюу коммандыг ажиллуулах функц
	 * @param Hex\CommandInterface $command
	 */
	public function handle(CommandInterface $command);
}