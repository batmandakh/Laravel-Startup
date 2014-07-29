<?php namespace Hex\Decorations\Validator;

use Hex\CommandBus\CommandInterface;

interface ValidatorInterface {

	public function validate(CommandInterface $command);
}