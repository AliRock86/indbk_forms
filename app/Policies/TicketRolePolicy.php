<?php

namespace App\Policies;

use App\Models\TicketRole;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketRolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any ticketRole.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the ticketRole.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketRole  $ticketRole
     * @return mixed
     */
    public function view(User $user, TicketRole $ticketRole)
    {
        //
    }

    /**
     * Determine whether the user can create ticketRole.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ticketRole.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketRole  $ticketRole
     * @return mixed
     */
    public function update(User $user, TicketRole $ticketRole)
    {
        //
    }

    /**
     * Determine whether the user can delete the ticketRole.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketRole  $ticketRole
     * @return mixed
     */
    public function delete(User $user, TicketRole $ticketRole)
    {
        //
    }

    /**
     * Determine whether the user can restore the ticketRole.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketRole  $ticketRole
     * @return mixed
     */
    public function restore(User $user, TicketRole $ticketRole)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ticketRole.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketRole  $ticketRole
     * @return mixed
     */
    public function forceDelete(User $user, TicketRole $ticketRole)
    {
        //
    }
}
