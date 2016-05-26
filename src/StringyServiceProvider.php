<?php namespace FW\Stringy;

use Illuminate\Support\ServiceProvider;
use Stringy;

class StringyServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('stringy', function ($app)
        {
            return new Stringy();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['stringy'];
    }

}
