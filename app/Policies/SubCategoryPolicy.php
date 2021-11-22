<?php

namespace App\Policies;

use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any subCategory.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the subCategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SubCategory  $subCategory
     * @return mixed
     */
    public function view(User $user, SubCategory $subCategory)
    {
        //
    }

    /**
     * Determine whether the user can create subCategory.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the subCategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SubCategory  $subCategory
     * @return mixed
     */
    public function update(User $user, SubCategory $subCategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the subCategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SubCategory  $subCategory
     * @return mixed
     */
    public function delete(User $user, SubCategory $subCategory)
    {
        //
    }

    /**
     * Determine whether the user can restore the subCategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SubCategory  $subCategory
     * @return mixed
     */
    public function restore(User $user, SubCategory $subCategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the subCategory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SubCategory  $subCategory
     * @return mixed
     */
    public function forceDelete(User $user, SubCategory $subCategory)
    {
        //
    }
}
