<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Resources\TicketResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Http\Resources\Collections\TicketCollection;

class TicketControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TicketCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Ticket::class);

        $ticket = Ticket::all();

        return new TicketCollection($ticket);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TicketRequest  $request
     * @return \App\Http\Resources\TicketResource
     */
    public function store(TicketRequest $request)
    {
        $this->authorize('create', Ticket::class);

        $ticket = Ticket::create($request->validated());

        return new TicketResource($ticket);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \App\Http\Resources\TicketResource
     */
    public function show(Ticket $ticket)
    {
        $this->authorize('view', $ticket);

        return new TicketResource($ticket);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \App\Http\Resources\TicketResource
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $this->authorize('update', $ticket);

        $ticket->update($request->validated());

        return new TicketResource($ticket);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \App\Http\Resources\TicketResource
     */
    public function destroy(Ticket $ticket)
    {
        $this->authorize('delete', $ticket);

        $ticket->delete();

        return new TicketResource($ticket);

    }
}
