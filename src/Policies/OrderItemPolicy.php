<?php

namespace Tadascript\Sales\Policies;

use Litepie\User\Contracts\UserPolicy;
use Tadascript\Sales\Models\OrderItem;

class OrderItemPolicy
{

    /**
     * Determine if the given user can view the order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function view(UserPolicy $user, OrderItem $order_item)
    {
        if ($user->canDo('sales.order_item.view') && $user->isAdmin()) {
            return true;
        }

        return $order_item->user_id == user_id() && $order_item->user_type == user_type();
    }

    /**
     * Determine if the given user can create a order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('sales.order_item.create');
    }

    /**
     * Determine if the given user can update the given order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function update(UserPolicy $user, OrderItem $order_item)
    {
        if ($user->canDo('sales.order_item.edit') && $user->isAdmin()) {
            return true;
        }

        return $order_item->user_id == user_id() && $order_item->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, OrderItem $order_item)
    {
        return $order_item->user_id == user_id() && $order_item->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function verify(UserPolicy $user, OrderItem $order_item)
    {
        if ($user->canDo('sales.order_item.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given order_item.
     *
     * @param UserPolicy $user
     * @param OrderItem $order_item
     *
     * @return bool
     */
    public function approve(UserPolicy $user, OrderItem $order_item)
    {
        if ($user->canDo('sales.order_item.approve')) {
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
