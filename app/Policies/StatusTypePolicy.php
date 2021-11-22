<?php

namespace App\Policies;

use App\Models\StatusType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any statusType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the statusType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StatusType  $statusType
     * @return mixed
     */
    public function view(User $user, StatusType $statusType)
    {
        //
    }

    /**
     * Determine whether the user can create statusType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the statusType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StatusType  $statusType
     * @return mixed
     */
    public function update(User $user, StatusType $statusType)
    {
        //
    }

    /**
     * Determine whether the user can delete the statusType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StatusType  $statusType
     * @return mixed
     */
    public function delete(User $user, StatusType $statusType)
    {
        //
    }

    /**
     * Determine whether the user can restore the statusType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StatusType  $statusType
     * @return mixed
     */
    public function restore(User $user, StatusType $statusType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the statusType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\StatusType  $statusType
     * @return mixed
     */
    public function forceDelete(User $user, StatusType $statusType)
    {
        //
    }
}
