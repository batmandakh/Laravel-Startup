<?php namespace Hex\CommandBus;

use Illuminate\Support\ServiceProvider;

class CommandBusServiceProvider extends ServiceProvider {
	
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Hex\CommandBus\CommandBus', function() 
		{
			return new CommandBus( $this->app, new CommandNameInflector );
		});
	}
}