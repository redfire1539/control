<?php namespace Orchestra\Control;

use Illuminate\Support\ServiceProvider;

class ControlServiceProvider extends ServiceProvider {

	/**
	 * Register service provider.
	 *
	 * @return void
	 */
	public function register() {}

	/**
	 * Boot the service provider
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('orchestra/control', 'orchestra/control');
	}
}
