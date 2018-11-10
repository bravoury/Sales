<?php

namespace Tadascript\Sales\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Tadascript\Sales\Models\Sales;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Tadascript\Sales\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/sales/warehouse/*')) {
            Route::bind('warehouse', function ($warehouse) {
                $warehouserepo = $this->app->make('Tadascript\Sales\Interfaces\WarehouseRepositoryInterface');
                return $warehouserepo->findorNew($warehouse);
            });
        }

        if (Request::is('*/sales/status/*')) {
            Route::bind('status', function ($status) {
                $statusrepo = $this->app->make('Tadascript\Sales\Interfaces\StatusRepositoryInterface');
                return $statusrepo->findorNew($status);
            });
        }

        if (Request::is('*/sales/quote/*')) {
            Route::bind('quote', function ($quote) {
                $quoterepo = $this->app->make('Tadascript\Sales\Interfaces\QuoteRepositoryInterface');
                return $quoterepo->findorNew($quote);
            });
        }

        if (Request::is('*/sales/quote_item/*')) {
            Route::bind('quote_item', function ($quote_item) {
                $quote_itemrepo = $this->app->make('Tadascript\Sales\Interfaces\QuoteItemRepositoryInterface');
                return $quote_itemrepo->findorNew($quote_item);
            });
        }

        if (Request::is('*/sales/order/*')) {
            Route::bind('order', function ($order) {
                $orderrepo = $this->app->make('Tadascript\Sales\Interfaces\OrderRepositoryInterface');
                return $orderrepo->findorNew($order);
            });
        }

        if (Request::is('*/sales/order_item/*')) {
            Route::bind('order_item', function ($order_item) {
                $order_itemrepo = $this->app->make('Tadascript\Sales\Interfaces\OrderItemRepositoryInterface');
                return $order_itemrepo->findorNew($order_item);
            });
        }

        if (Request::is('*/sales/transaction/*')) {
            Route::bind('transaction', function ($transaction) {
                $transactionrepo = $this->app->make('Tadascript\Sales\Interfaces\TransactionRepositoryInterface');
                return $transactionrepo->findorNew($transaction);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        if (request()->segment(1) == 'api' || request()->segment(2) == 'api') {
            return;
        }
        
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'prefix'     => trans_setlocale(),
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

}
