<?php

namespace App\Policies;

use App\Models\TicketType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any ticketType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the ticketType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketType  $ticketType
     * @return mixed
     */
    public function view(User $user, TicketType $ticketType)
    {
        //
    }

    /**
     * Determine whether the user can create ticketType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ticketType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketType  $ticketType
     * @return mixed
     */
    public function update(User $user, TicketType $ticketType)
    {
        //
    }

    /**
     * Determine whether the user can delete the ticketType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketType  $ticketType
     * @return mixed
     */
    public function delete(User $user, TicketType $ticketType)
    {
        //
    }

    /**
     * Determine whether the user can restore the ticketType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketType  $ticketType
     * @return mixed
     */
    public function restore(User $user, TicketType $ticketType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ticketType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TicketType  $ticketType
     * @return mixed
     */
    public function forceDelete(User $user, TicketType $ticketType)
    {
        //
    }
}
