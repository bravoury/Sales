<?php

namespace Tadascript\Sales\Policies;

use Litepie\User\Contracts\UserPolicy;
use Tadascript\Sales\Models\Status;

class StatusPolicy
{

    /**
     * Determine if the given user can view the status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function view(UserPolicy $user, Status $status)
    {
        if ($user->canDo('sales.status.view') && $user->isAdmin()) {
            return true;
        }

        return $status->user_id == user_id() && $status->user_type == user_type();
    }

    /**
     * Determine if the given user can create a status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('sales.status.create');
    }

    /**
     * Determine if the given user can update the given status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function update(UserPolicy $user, Status $status)
    {
        if ($user->canDo('sales.status.edit') && $user->isAdmin()) {
            return true;
        }

        return $status->user_id == user_id() && $status->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Status $status)
    {
        return $status->user_id == user_id() && $status->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Status $status)
    {
        if ($user->canDo('sales.status.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given status.
     *
     * @param UserPolicy $user
     * @param Status $status
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Status $status)
    {
        if ($user->canDo('sales.status.approve')) {
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
