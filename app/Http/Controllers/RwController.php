<?php

namespace App\Http\Controllers;

use App\Rw;
use App\Http\Resources\Rw as RwResource;
use App\Http\Requests\RwRequest;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RwResource::collection(Rw::with(['kelurahan', 'rts'])->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RwRequest $request)
    {
        $rw = Rw::create($request->validated());
        return new RwResource($rw->load(['kelurahan']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show(Rw $rw)
    {
        return new RwResource($rw->load(['rts', 'kelurahan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(RwRequest $request, Rw $rw)
    {
        $rw->update($request->validated());
        return new RwResource($rw->load(['rts', 'kelurahan']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rw $rw)
    {
        $rw->delete();
        return response()->json(null, 204);
    }
}
