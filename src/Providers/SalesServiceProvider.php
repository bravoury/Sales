<?php

namespace Tadascript\Sales\Providers;

use Illuminate\Support\ServiceProvider;

class SalesServiceProvider extends ServiceProvider
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
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'sales');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'sales');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerSales();
        $this->registerFacade();
        $this->registerBindings();
        //$this->registerCommands();
    }


    /**
     * Register the application bindings.
     *
     * @return void
     */
    protected function registerSales()
    {
        $this->app->bind('sales', function($app) {
            return new Sales($app);
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Sales', 'Lavalite\Sales\Facades\Sales');
        });
    }

    /**
     * Register bindings for the provider.
     *
     * @return void
     */
    public function registerBindings() {
        // Bind facade
        $this->app->bind('tadascript.sales', function ($app) {
            return $this->app->make('Tadascript\Sales\Sales');
        });

        // Bind Warehouse to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\WarehouseRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\WarehouseRepository::class
        );
        // Bind Status to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\StatusRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\StatusRepository::class
        );
        // Bind Quote to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\QuoteRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\QuoteRepository::class
        );
        // Bind QuoteItem to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\QuoteItemRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\QuoteItemRepository::class
        );
        // Bind Order to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\OrderRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\OrderRepository::class
        );
        // Bind OrderItem to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\OrderItemRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\OrderItemRepository::class
        );
        // Bind Transaction to repository
        $this->app->bind(
            'Tadascript\Sales\Interfaces\TransactionRepositoryInterface',
            \Tadascript\Sales\Repositories\Eloquent\TransactionRepository::class
        );

        $this->app->register(\Tadascript\Sales\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Tadascript\Sales\Providers\RouteServiceProvider::class);
            }

    /**
     * Merges user's and sales's configs.
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/sales.php', 'sales'
        );
    }

    /**
     * Register scaffolding command
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\MakeSales::class,
            ]);
        }
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tadascript.sales'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('tadascript/sales.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/sales')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/sales')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
