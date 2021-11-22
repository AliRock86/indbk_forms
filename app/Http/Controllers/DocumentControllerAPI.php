<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Resources\DocumentResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Http\Resources\Collections\DocumentCollection;
use Validator;

class DocumentControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\DocumentCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Document::class);

        $document = Document::all();

        return new DocumentCollection($document);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DocumentRequest  $request
     * @return \App\Http\Resources\DocumentResource
     */
    public function store(DocumentRequest $request)
    {
        $this->authorize('create', Document::class);

        $document = Document::create($request->validated());

        return new DocumentResource($document);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \App\Http\Resources\DocumentResource
     */
    public function show(Request $request)
    {
        $validator = Validator::make($request->all(),[
         'doc_id' => 'required',
         'cif' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false ,
                'data' => $validator->messages(),
            ],400);
        }
        $doc = Document::where([['id','=',$request->doc_id],['cif','=',$request->cif]])->get();
        $status = Status::find($doc[0]->id);
        return response()->json([
            'success' => true ,
            'data' => $status,
        ],200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DocumentRequest  $request
     * @param  \App\Models\Document  $document
     * @return \App\Http\Resources\DocumentResource
     */
    public function update(DocumentRequest $request, Document $document)
    {
        $this->authorize('update', $document);

        $document->update($request->validated());

        return new DocumentResource($document);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \App\Http\Resources\DocumentResource
     */
    public function destroy(Document $document)
    {
        $this->authorize('delete', $document);

        $document->delete();

        return new DocumentResource($document);

    }
}
