<?php 

namespace rotha\LaravelTinypng;

use Illuminate\Support\ServiceProvider;
use Tinypng\Tinypng;

class LaravelTinypngServiceProvider extends ServiceProvider {

	/**
	* Indicates if loading of the provider is deferred.
	*
	* @var bool
	*/
	protected $defer = false;

	/**
	* Register custom form macros on package start
	* @return void
	*/
	public function boot()
	{	
		$configPath = __DIR__ . '/../config/tinypng.php';
        $this->publishes([$configPath => config_path('tinypng.php')], 'config');
	}

	/**
	* Register the service provider.
	*
	* @return void
	*/
	public function register()
	{
		$configPath = __DIR__ . '/../config/tinypng.php';
        $this->mergeConfigFrom($configPath, 'tinypng');
		$this->app->bind('tinypng', 'rotha\LaravelTinypng\Services\TinypngService');

	}

	/**
	* Get the services provided by the provider.
	*
	* @return array
	*/
	public function provides()
	{
		return array();
	}

}