<?php

namespace App\Policies;

use App\Models\RequestsType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestsTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any requestsType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the requestsType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RequestsType  $requestsType
     * @return mixed
     */
    public function view(User $user, RequestsType $requestsType)
    {
        //
    }

    /**
     * Determine whether the user can create requestsType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the requestsType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RequestsType  $requestsType
     * @return mixed
     */
    public function update(User $user, RequestsType $requestsType)
    {
        //
    }

    /**
     * Determine whether the user can delete the requestsType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RequestsType  $requestsType
     * @return mixed
     */
    public function delete(User $user, RequestsType $requestsType)
    {
        //
    }

    /**
     * Determine whether the user can restore the requestsType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RequestsType  $requestsType
     * @return mixed
     */
    public function restore(User $user, RequestsType $requestsType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the requestsType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RequestsType  $requestsType
     * @return mixed
     */
    public function forceDelete(User $user, RequestsType $requestsType)
    {
        //
    }
}
