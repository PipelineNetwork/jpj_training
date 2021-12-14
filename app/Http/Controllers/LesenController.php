<?php

namespace App\Http\Controllers;

use App\Models\Lesen;
use App\Http\Requests\StoreLesenRequest;
use App\Http\Requests\UpdateLesenRequest;

class LesenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lesen::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLesenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLesenRequest $request)
    {
        //
        return Lesen::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function show(Lesen $lesen)
    {
        return $lesen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesen $lesen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLesenRequest  $request
     * @param  \App\Models\Lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLesenRequest $request, Lesen $lesen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesen  $lesen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesen $lesen)
    {
        //
    }
}
