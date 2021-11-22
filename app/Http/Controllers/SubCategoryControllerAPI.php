<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Resources\SubCategoryResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Resources\Collections\SubCategoryCollection;

class SubCategoryControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\SubCategoryCollection
     */
    public function index()
    {
        $this->authorize('viewAny', SubCategory::class);

        $subCategory = SubCategory::all();

        return new SubCategoryCollection($subCategory);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SubCategoryRequest  $request
     * @return \App\Http\Resources\SubCategoryResource
     */
    public function store(SubCategoryRequest $request)
    {
        $this->authorize('create', SubCategory::class);

        $subCategory = SubCategory::create($request->validated());

        return new SubCategoryResource($subCategory);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \App\Http\Resources\SubCategoryResource
     */
    public function show(SubCategory $subCategory)
    {
        $this->authorize('view', $subCategory);

        return new SubCategoryResource($subCategory);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SubCategoryRequest  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \App\Http\Resources\SubCategoryResource
     */
    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $this->authorize('update', $subCategory);

        $subCategory->update($request->validated());

        return new SubCategoryResource($subCategory);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \App\Http\Resources\SubCategoryResource
     */
    public function destroy(SubCategory $subCategory)
    {
        $this->authorize('delete', $subCategory);

        $subCategory->delete();

        return new SubCategoryResource($subCategory);

    }
}
