<?php

namespace Tadascript\Sales\Policies;

use Litepie\User\Contracts\UserPolicy;
use Tadascript\Sales\Models\Quote;

class QuotePolicy
{

    /**
     * Determine if the given user can view the quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function view(UserPolicy $user, Quote $quote)
    {
        if ($user->canDo('sales.quote.view') && $user->isAdmin()) {
            return true;
        }

        return $quote->user_id == user_id() && $quote->user_type == user_type();
    }

    /**
     * Determine if the given user can create a quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('sales.quote.create');
    }

    /**
     * Determine if the given user can update the given quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function update(UserPolicy $user, Quote $quote)
    {
        if ($user->canDo('sales.quote.edit') && $user->isAdmin()) {
            return true;
        }

        return $quote->user_id == user_id() && $quote->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Quote $quote)
    {
        return $quote->user_id == user_id() && $quote->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Quote $quote)
    {
        if ($user->canDo('sales.quote.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given quote.
     *
     * @param UserPolicy $user
     * @param Quote $quote
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Quote $quote)
    {
        if ($user->canDo('sales.quote.approve')) {
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
