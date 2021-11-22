<?php

namespace App\Policies;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any staff.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the staff.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function view(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can create staff.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the staff.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function update(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can delete the staff.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function delete(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can restore the staff.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function restore(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the staff.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Staff  $staff
     * @return mixed
     */
    public function forceDelete(User $user, Staff $staff)
    {
        //
    }
}
