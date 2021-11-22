<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Resources\StaffResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Http\Resources\Collections\StaffCollection;

class StaffControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\StaffCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Staff::class);

        $staff = Staff::all();

        return new StaffCollection($staff);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StaffRequest  $request
     * @return \App\Http\Resources\StaffResource
     */
    public function store(StaffRequest $request)
    {
        $this->authorize('create', Staff::class);

        $staff = Staff::create($request->validated());

        return new StaffResource($staff);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \App\Http\Resources\StaffResource
     */
    public function show(Staff $staff)
    {
        $this->authorize('view', $staff);

        return new StaffResource($staff);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \App\Http\Resources\StaffResource
     */
    public function update(StaffRequest $request, Staff $staff)
    {
        $this->authorize('update', $staff);

        $staff->update($request->validated());

        return new StaffResource($staff);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \App\Http\Resources\StaffResource
     */
    public function destroy(Staff $staff)
    {
        $this->authorize('delete', $staff);

        $staff->delete();

        return new StaffResource($staff);

    }
}
