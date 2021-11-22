<?php

namespace App\Http\Controllers;

use App\Models\RequestsType;
use App\Http\Resources\RequestsTypeResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestsTypeRequest;
use App\Http\Resources\Collections\RequestsTypeCollection;

class RequestsTypeControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\RequestsTypeCollection
     */
    public function index()
    {
        $this->authorize('viewAny', RequestsType::class);

        $requestsType = RequestsType::all();

        return new RequestsTypeCollection($requestsType);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RequestsTypeRequest  $request
     * @return \App\Http\Resources\RequestsTypeResource
     */
    public function store(RequestsTypeRequest $request)
    {
        $this->authorize('create', RequestsType::class);

        $requestsType = RequestsType::create($request->validated());

        return new RequestsTypeResource($requestsType);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestsType  $requestsType
     * @return \App\Http\Resources\RequestsTypeResource
     */
    public function show(RequestsType $requestsType)
    {
        $this->authorize('view', $requestsType);

        return new RequestsTypeResource($requestsType);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RequestsTypeRequest  $request
     * @param  \App\Models\RequestsType  $requestsType
     * @return \App\Http\Resources\RequestsTypeResource
     */
    public function update(RequestsTypeRequest $request, RequestsType $requestsType)
    {
        $this->authorize('update', $requestsType);

        $requestsType->update($request->validated());

        return new RequestsTypeResource($requestsType);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestsType  $requestsType
     * @return \App\Http\Resources\RequestsTypeResource
     */
    public function destroy(RequestsType $requestsType)
    {
        $this->authorize('delete', $requestsType);

        $requestsType->delete();

        return new RequestsTypeResource($requestsType);

    }
}
