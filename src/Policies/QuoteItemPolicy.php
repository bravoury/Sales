<?php

namespace Tadascript\Sales\Policies;

use Litepie\User\Contracts\UserPolicy;
use Tadascript\Sales\Models\QuoteItem;

class QuoteItemPolicy
{

    /**
     * Determine if the given user can view the quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function view(UserPolicy $user, QuoteItem $quote_item)
    {
        if ($user->canDo('sales.quote_item.view') && $user->isAdmin()) {
            return true;
        }

        return $quote_item->user_id == user_id() && $quote_item->user_type == user_type();
    }

    /**
     * Determine if the given user can create a quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('sales.quote_item.create');
    }

    /**
     * Determine if the given user can update the given quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function update(UserPolicy $user, QuoteItem $quote_item)
    {
        if ($user->canDo('sales.quote_item.edit') && $user->isAdmin()) {
            return true;
        }

        return $quote_item->user_id == user_id() && $quote_item->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, QuoteItem $quote_item)
    {
        return $quote_item->user_id == user_id() && $quote_item->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function verify(UserPolicy $user, QuoteItem $quote_item)
    {
        if ($user->canDo('sales.quote_item.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given quote_item.
     *
     * @param UserPolicy $user
     * @param QuoteItem $quote_item
     *
     * @return bool
     */
    public function approve(UserPolicy $user, QuoteItem $quote_item)
    {
        if ($user->canDo('sales.quote_item.approve')) {
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
