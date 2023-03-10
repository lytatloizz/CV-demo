<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Http\Requests\StoreCouponsRequest;
use App\Http\Requests\UpdateCouponsRequest;

class CouponsController extends Controller
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
     * @param  \App\Http\Requests\StoreCouponsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function show(Coupons $coupons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupons $coupons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouponsRequest  $request
     * @param  \App\Models\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponsRequest $request, Coupons $coupons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupons $coupons)
    {
        //
    }
}
