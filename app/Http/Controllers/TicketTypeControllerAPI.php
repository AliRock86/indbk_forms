<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use App\Http\Resources\TicketTypeResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketTypeRequest;
use App\Http\Resources\Collections\TicketTypeCollection;

class TicketTypeControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TicketTypeCollection
     */
    public function index()
    {
        $this->authorize('viewAny', TicketType::class);

        $ticketType = TicketType::all();

        return new TicketTypeCollection($ticketType);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TicketTypeRequest  $request
     * @return \App\Http\Resources\TicketTypeResource
     */
    public function store(TicketTypeRequest $request)
    {
        $this->authorize('create', TicketType::class);

        $ticketType = TicketType::create($request->validated());

        return new TicketTypeResource($ticketType);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \App\Http\Resources\TicketTypeResource
     */
    public function show(TicketType $ticketType)
    {
        $this->authorize('view', $ticketType);

        return new TicketTypeResource($ticketType);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TicketTypeRequest  $request
     * @param  \App\Models\TicketType  $ticketType
     * @return \App\Http\Resources\TicketTypeResource
     */
    public function update(TicketTypeRequest $request, TicketType $ticketType)
    {
        $this->authorize('update', $ticketType);

        $ticketType->update($request->validated());

        return new TicketTypeResource($ticketType);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \App\Http\Resources\TicketTypeResource
     */
    public function destroy(TicketType $ticketType)
    {
        $this->authorize('delete', $ticketType);

        $ticketType->delete();

        return new TicketTypeResource($ticketType);

    }
}
