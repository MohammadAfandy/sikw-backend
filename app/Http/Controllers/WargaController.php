<?php

namespace App\Http\Controllers;

use App\Warga;
use App\Http\Resources\Warga as WargaResource;
use App\Http\Requests\WargaRequest;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WargaResource::collection(Warga::with(['user'])->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WargaRequest $request)
    {
        $warga = Warga::create($request->validated());
        return new WargaResource($warga->load(['user']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        return new WargaResource($warga->load(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(WargaRequest $request, Warga $warga)
    {
        $warga->update($request->validated());
        return new WargaResource($warga->load(['user']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
        return response()->json(null, 204);
    }
}
