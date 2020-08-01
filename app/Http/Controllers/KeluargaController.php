<?php

namespace App\Http\Controllers;

use App\Keluarga;
use App\Http\Resources\Keluarga as KeluargaResource;
use App\Http\Requests\KeluargaRequest;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return KeluargaResource::collection(Keluarga::with(['rt'])->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeluargaRequest $request)
    {
        $keluarga = Keluarga::create($request->validated());
        return new KeluargaResource($keluarga->load(['rt']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        return new KeluargaResource($keluarga->load(['rt']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(KeluargaRequest $request, Keluarga $keluarga)
    {
        $keluarga->update($request->validated());
        return new KeluargaResource($keluarga->load(['rt']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();
        return response()->json(null, 204);
    }
}
