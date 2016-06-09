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
	 * Name of the service.
	 *
	 * @var string
	 */
	public $name = 'storehours';

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/config.php' => config_path($this->name . '.php'),
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
	        $hours = $app['config']->get($this->getConfigKey('hours'), []);
	        $exceptions = $app['config']->get($this->getConfigKey('exceptions'), []);
	        $templates = $app['translator']->get($this->getTranslateKey(), []);
			return new StoreHours($hours, $exceptions, $templates);
		});
	}

	/**
	 * ...
	 *
	 * @return string
	 */
	protected function getTranslateKey($key = null)
	{
		$config = $this->app['config']->get('app.storehours.translate');
		return implode('.', array_filter([$config ? $config : $this->name, $key]));
	}

	/**
	 * ...
	 *
	 * @return string
	 */
	protected function getConfigKey($key = null)
	{
		$config = $this->app['config']->get('app.storehours.config');
		return implode('.', array_filter([$config ? $config : $this->name, $key]));
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array($this->name);
	}
	
}