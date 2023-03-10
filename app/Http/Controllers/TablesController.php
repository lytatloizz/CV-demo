<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use App\Http\Requests\StoreTablesRequest;
use App\Http\Requests\UpdateTablesRequest;

class TablesController extends Controller
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
     * @param  \App\Http\Requests\StoreTablesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTablesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function show(Tables $tables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function edit(Tables $tables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTablesRequest  $request
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTablesRequest $request, Tables $tables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tables $tables)
    {
        //
    }
}
