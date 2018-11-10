<?php

namespace Tadascript\Sales\Policies;

use Litepie\User\Contracts\UserPolicy;
use Tadascript\Sales\Models\Warehouse;

class WarehousePolicy
{

    /**
     * Determine if the given user can view the warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function view(UserPolicy $user, Warehouse $warehouse)
    {
        if ($user->canDo('sales.warehouse.view') && $user->isAdmin()) {
            return true;
        }

        return $warehouse->user_id == user_id() && $warehouse->user_type == user_type();
    }

    /**
     * Determine if the given user can create a warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('sales.warehouse.create');
    }

    /**
     * Determine if the given user can update the given warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function update(UserPolicy $user, Warehouse $warehouse)
    {
        if ($user->canDo('sales.warehouse.edit') && $user->isAdmin()) {
            return true;
        }

        return $warehouse->user_id == user_id() && $warehouse->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Warehouse $warehouse)
    {
        return $warehouse->user_id == user_id() && $warehouse->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Warehouse $warehouse)
    {
        if ($user->canDo('sales.warehouse.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given warehouse.
     *
     * @param UserPolicy $user
     * @param Warehouse $warehouse
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Warehouse $warehouse)
    {
        if ($user->canDo('sales.warehouse.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
