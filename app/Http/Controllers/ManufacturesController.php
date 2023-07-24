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
        return view('admin.manufacture.manufacture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreManufacturesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManufacturesRequest $request, Manufactures $manufactures)
    {
        //
        return $manufactures->StoreManufacture($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function show(Manufactures $manufactures)
    {
        $manufactures = $manufactures->where('manu_status', 0)->get();
        return view('admin.manufacture.manufactures', compact('manufactures'));
    }

    /**
     * Display the specified resource (Recycle Bin).
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function showTrash(Manufactures $manufactures)
    {
        //
        $manufacture_trash = $manufactures->where('manu_status', 1)->get();
        return view('admin.manufacture.manufactures', compact('manufacture_trash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufactures $manufactures, $id)
    {
        //
        $manufacture = $manufactures->find($id);
        if ($manufacture) {
            return view('admin.manufacture.manufacture', compact('manufacture'));
        }
        return redirect()->route('manufactures')->withSuccess('Your manufacture details are not valid');
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
        return $manufactures->UpdateManufacture($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufactures $manufactures, $id)
    {
        //
        return $manufactures->DeleteManufactore($id);
    }

    /**
     * Move the manufacture to trash.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function trash(Manufactures $manufacture, $id)
    {
        //
        return $manufacture->MoveToTrash($id);
    }

    /**
     * Restore the manufacture to trash.
     *
     * @param  \App\Models\Manufactures  $manufactures
     * @return \Illuminate\Http\Response
     */
    public function restore(Manufactures $manufacture, $id)
    {
        //
        return $manufacture->RestoreManufactore($id);
    }
}
