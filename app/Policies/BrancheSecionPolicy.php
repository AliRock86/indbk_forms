<?php

namespace App\Policies;

use App\Models\BrancheSecion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrancheSecionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return mixed
     */
    public function view(User $user, BrancheSecion $brancheSecion)
    {
        //
    }

    /**
     * Determine whether the user can create brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return mixed
     */
    public function update(User $user, BrancheSecion $brancheSecion)
    {
        //
    }

    /**
     * Determine whether the user can delete the brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return mixed
     */
    public function delete(User $user, BrancheSecion $brancheSecion)
    {
        //
    }

    /**
     * Determine whether the user can restore the brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return mixed
     */
    public function restore(User $user, BrancheSecion $brancheSecion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the brancheSecion.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return mixed
     */
    public function forceDelete(User $user, BrancheSecion $brancheSecion)
    {
        //
    }
}
