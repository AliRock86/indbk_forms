<?php

namespace App\Http\Controllers;

use App\Models\Permtion;
use App\Http\Resources\PermtionResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermtionRequest;
use App\Http\Resources\Collections\PermtionCollection;

class PermtionControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\PermtionCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Permtion::class);

        $permtion = Permtion::all();

        return new PermtionCollection($permtion);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PermtionRequest  $request
     * @return \App\Http\Resources\PermtionResource
     */
    public function store(PermtionRequest $request)
    {
        $this->authorize('create', Permtion::class);

        $permtion = Permtion::create($request->validated());

        return new PermtionResource($permtion);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permtion  $permtion
     * @return \App\Http\Resources\PermtionResource
     */
    public function show(Permtion $permtion)
    {
        $this->authorize('view', $permtion);

        return new PermtionResource($permtion);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PermtionRequest  $request
     * @param  \App\Models\Permtion  $permtion
     * @return \App\Http\Resources\PermtionResource
     */
    public function update(PermtionRequest $request, Permtion $permtion)
    {
        $this->authorize('update', $permtion);

        $permtion->update($request->validated());

        return new PermtionResource($permtion);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permtion  $permtion
     * @return \App\Http\Resources\PermtionResource
     */
    public function destroy(Permtion $permtion)
    {
        $this->authorize('delete', $permtion);

        $permtion->delete();

        return new PermtionResource($permtion);

    }
}
