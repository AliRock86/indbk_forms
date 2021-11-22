<?php

namespace App\Policies;

use App\Models\Permtion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermtionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any permtion.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the permtion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permtion  $permtion
     * @return mixed
     */
    public function view(User $user, Permtion $permtion)
    {
        //
    }

    /**
     * Determine whether the user can create permtion.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the permtion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permtion  $permtion
     * @return mixed
     */
    public function update(User $user, Permtion $permtion)
    {
        //
    }

    /**
     * Determine whether the user can delete the permtion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permtion  $permtion
     * @return mixed
     */
    public function delete(User $user, Permtion $permtion)
    {
        //
    }

    /**
     * Determine whether the user can restore the permtion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permtion  $permtion
     * @return mixed
     */
    public function restore(User $user, Permtion $permtion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the permtion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permtion  $permtion
     * @return mixed
     */
    public function forceDelete(User $user, Permtion $permtion)
    {
        //
    }
}
