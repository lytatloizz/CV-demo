<?php

namespace App\Http\Controllers;

use App\Models\Manufactures;
use App\Http\Requests\StoreManufacturesRequest;
use App\Http\Requests\UpdateManufacturesRequest;

class ManufacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreManufacturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManufacturesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function show(Manufactures $manufactures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufactures $manufactures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManufacturesRequest  $request
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManufacturesRequest $request, Manufactures $manufactures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufactures $manufactures)
    {
        //
    }
}
