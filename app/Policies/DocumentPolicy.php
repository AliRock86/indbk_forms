<?php

namespace App\Policies;

use App\Models\Document;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any document.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the document.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Document  $document
     * @return mixed
     */
    public function view(User $user, Document $document)
    {
        //
    }

    /**
     * Determine whether the user can create document.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the document.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Document  $document
     * @return mixed
     */
    public function update(User $user, Document $document)
    {
        //
    }

    /**
     * Determine whether the user can delete the document.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Document  $document
     * @return mixed
     */
    public function delete(User $user, Document $document)
    {
        //
    }

    /**
     * Determine whether the user can restore the document.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Document  $document
     * @return mixed
     */
    public function restore(User $user, Document $document)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the document.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Document  $document
     * @return mixed
     */
    public function forceDelete(User $user, Document $document)
    {
        //
    }
}
