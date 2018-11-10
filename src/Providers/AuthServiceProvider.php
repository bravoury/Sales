<?php

namespace Tadascript\Sales\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Warehouse policy
        'Tadascript\Sales\Models\Warehouse' => \Tadascript\Sales\Policies\WarehousePolicy::class,
// Bind Status policy
        'Tadascript\Sales\Models\Status' => \Tadascript\Sales\Policies\StatusPolicy::class,
// Bind Quote policy
        'Tadascript\Sales\Models\Quote' => \Tadascript\Sales\Policies\QuotePolicy::class,
// Bind QuoteItem policy
        'Tadascript\Sales\Models\QuoteItem' => \Tadascript\Sales\Policies\QuoteItemPolicy::class,
// Bind Order policy
        'Tadascript\Sales\Models\Order' => \Tadascript\Sales\Policies\OrderPolicy::class,
// Bind OrderItem policy
        'Tadascript\Sales\Models\OrderItem' => \Tadascript\Sales\Policies\OrderItemPolicy::class,
// Bind Transaction policy
        'Tadascript\Sales\Models\Transaction' => \Tadascript\Sales\Policies\TransactionPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
