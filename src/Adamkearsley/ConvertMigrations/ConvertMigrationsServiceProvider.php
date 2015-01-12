<?php namespace Adamkearsley\ConvertMigrations;

use Illuminate\Support\ServiceProvider;

class ConvertMigrationsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
    	// Workaround until the L5.0 workbench/packages are fixed / clarified with official
    	// Laravel 5.0 release
        if (method_exists($this, 'package')) {
        	$this->package('adamkearsley/convert-migrations');
        }
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['artisan.convert.migrations'] = $this->app->share(function($app)
        {
            return new ConvertMigrationsCommand;
        });

        $this->commands('artisan.convert.migrations');
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
