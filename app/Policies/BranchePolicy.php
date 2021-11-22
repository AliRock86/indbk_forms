<?php

namespace App\Policies;

use App\Models\Branche;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BranchePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any branche.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the branche.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Branche  $branche
     * @return mixed
     */
    public function view(User $user, Branche $branche)
    {
        //
    }

    /**
     * Determine whether the user can create branche.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the branche.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Branche  $branche
     * @return mixed
     */
    public function update(User $user, Branche $branche)
    {
        //
    }

    /**
     * Determine whether the user can delete the branche.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Branche  $branche
     * @return mixed
     */
    public function delete(User $user, Branche $branche)
    {
        //
    }

    /**
     * Determine whether the user can restore the branche.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Branche  $branche
     * @return mixed
     */
    public function restore(User $user, Branche $branche)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the branche.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Branche  $branche
     * @return mixed
     */
    public function forceDelete(User $user, Branche $branche)
    {
        //
    }
}
