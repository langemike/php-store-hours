<?php namespace Langemike\StoreHours;

use Illuminate\Support\ServiceProvider;

class StoreHoursProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/config.php' => config_path('storehours.php'),
        ]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('storehours', function($app) {
			$hours = [];
			$exceptions = [];
			$templates = [];
			return new StoreHours($hours, $exceptions, $templates);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('storehours');
	}
	
}