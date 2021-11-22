<?php

namespace App\Http\Controllers;

use App\Models\TicketRole;
use App\Http\Resources\TicketRoleResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRoleRequest;
use App\Http\Resources\Collections\TicketRoleCollection;

class TicketRoleControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TicketRoleCollection
     */
    public function index()
    {
        $this->authorize('viewAny', TicketRole::class);

        $ticketRole = TicketRole::all();

        return new TicketRoleCollection($ticketRole);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TicketRoleRequest  $request
     * @return \App\Http\Resources\TicketRoleResource
     */
    public function store(TicketRoleRequest $request)
    {
        $this->authorize('create', TicketRole::class);

        $ticketRole = TicketRole::create($request->validated());

        return new TicketRoleResource($ticketRole);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketRole  $ticketRole
     * @return \App\Http\Resources\TicketRoleResource
     */
    public function show(TicketRole $ticketRole)
    {
        $this->authorize('view', $ticketRole);

        return new TicketRoleResource($ticketRole);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TicketRoleRequest  $request
     * @param  \App\Models\TicketRole  $ticketRole
     * @return \App\Http\Resources\TicketRoleResource
     */
    public function update(TicketRoleRequest $request, TicketRole $ticketRole)
    {
        $this->authorize('update', $ticketRole);

        $ticketRole->update($request->validated());

        return new TicketRoleResource($ticketRole);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketRole  $ticketRole
     * @return \App\Http\Resources\TicketRoleResource
     */
    public function destroy(TicketRole $ticketRole)
    {
        $this->authorize('delete', $ticketRole);

        $ticketRole->delete();

        return new TicketRoleResource($ticketRole);

    }
}
