<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use App\Http\Resources\BrancheResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrancheRequest;
use App\Http\Resources\Collections\BrancheCollection;

class BrancheControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\BrancheCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Branche::class);

        $branche = Branche::all();

        return new BrancheCollection($branche);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BrancheRequest  $request
     * @return \App\Http\Resources\BrancheResource
     */
    public function store(BrancheRequest $request)
    {
        $this->authorize('create', Branche::class);

        $branche = Branche::create($request->validated());

        return new BrancheResource($branche);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \App\Http\Resources\BrancheResource
     */
    public function show(Branche $branche)
    {
        $this->authorize('view', $branche);

        return new BrancheResource($branche);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BrancheRequest  $request
     * @param  \App\Models\Branche  $branche
     * @return \App\Http\Resources\BrancheResource
     */
    public function update(BrancheRequest $request, Branche $branche)
    {
        $this->authorize('update', $branche);

        $branche->update($request->validated());

        return new BrancheResource($branche);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branche  $branche
     * @return \App\Http\Resources\BrancheResource
     */
    public function destroy(Branche $branche)
    {
        $this->authorize('delete', $branche);

        $branche->delete();

        return new BrancheResource($branche);

    }
}
