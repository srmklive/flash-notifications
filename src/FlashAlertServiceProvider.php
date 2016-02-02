<?php namespace Srmklive\FlashAlert;

/**
 * Class PayPalServiceProvider
 * @package Srmklive\FlashAlert
 */

use Illuminate\Support\ServiceProvider;

class FlashAlertServiceProvider extends ServiceProvider
{
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
        // Publish config files
        $this->publishes([
            __DIR__. '/../config/config.php' => config_path('flashalert.php'),
        ]);

        // Load FlashAlert View Files
        $this->loadViewsFrom(__DIR__.'/../views', 'flashalert');

        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/vendor/flashalert'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFlashAlert();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerFlashAlert()
    {
        $this->app->bind(
            'Srmklive\FlashAlert\SessionStore',
            'Srmklive\FlashAlert\FlashAlertSessionStore'
        );

        $this->app->singleton('flashalert', function() {
            return $this->app->make('Srmklive\FlashAlert\FlashAlertHandler');
        });
    }
}
