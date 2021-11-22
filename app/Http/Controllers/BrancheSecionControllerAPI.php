<?php

namespace App\Http\Controllers;

use App\Models\BrancheSecion;
use App\Http\Resources\BrancheSecionResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrancheSecionRequest;
use App\Http\Resources\Collections\BrancheSecionCollection;

class BrancheSecionControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\BrancheSecionCollection
     */
    public function index()
    {
        $this->authorize('viewAny', BrancheSecion::class);

        $brancheSecion = BrancheSecion::all();

        return new BrancheSecionCollection($brancheSecion);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BrancheSecionRequest  $request
     * @return \App\Http\Resources\BrancheSecionResource
     */
    public function store(BrancheSecionRequest $request)
    {
        $this->authorize('create', BrancheSecion::class);

        $brancheSecion = BrancheSecion::create($request->validated());

        return new BrancheSecionResource($brancheSecion);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return \App\Http\Resources\BrancheSecionResource
     */
    public function show(BrancheSecion $brancheSecion)
    {
        $this->authorize('view', $brancheSecion);

        return new BrancheSecionResource($brancheSecion);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BrancheSecionRequest  $request
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return \App\Http\Resources\BrancheSecionResource
     */
    public function update(BrancheSecionRequest $request, BrancheSecion $brancheSecion)
    {
        $this->authorize('update', $brancheSecion);

        $brancheSecion->update($request->validated());

        return new BrancheSecionResource($brancheSecion);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrancheSecion  $brancheSecion
     * @return \App\Http\Resources\BrancheSecionResource
     */
    public function destroy(BrancheSecion $brancheSecion)
    {
        $this->authorize('delete', $brancheSecion);

        $brancheSecion->delete();

        return new BrancheSecionResource($brancheSecion);

    }
}
