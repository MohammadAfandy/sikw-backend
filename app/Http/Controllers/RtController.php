<?php

namespace App\Http\Controllers;

use App\Rt;
use App\Http\Requests\RtRequest;
use App\Http\Resources\Rt as RtResource;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RtResource::collection(Rt::with(['keluargas', 'rw'])->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RtRequest $request)
    {
        $rt = Rt::create($request->validated());
        return new RtResource($rt->load(['rw']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show(Rt $rt)
    {
        return new RtResource($rt->load(['keluargas', 'rw']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update(RtRequest $request, Rt $rt)
    {
        $rt->update($request->validated());
        return new RtResource($rt->load(['keluargas', 'rw']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rt $rt)
    {
        $rt->delete();
        return response()->json(null, 204);
    }
}
