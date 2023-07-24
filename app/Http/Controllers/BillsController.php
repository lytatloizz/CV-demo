<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Http\Requests\StoreBillsRequest;
use App\Http\Requests\UpdateBillsRequest;

class BillsController extends Controller
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
     * @param  \App\Http\Requests\StoreBillsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillsRequest $request, Bills $bills)
    {
        //
        return $bills->StoreBill($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function show(Bills $bills)
    {
        //
        $bills = $bills->all();
        return view('admin.bill.bills', compact('bills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function edit(Bills $bills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillsRequest  $request
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillsRequest $request, Bills $bills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bills  $bills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bills $bills, $id)
    {
        //
        return $bills->DeleteBill($bills, $id);
    }
}
