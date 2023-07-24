<?php

namespace App\Http\Controllers;

use App\Models\Protypes;
use App\Http\Requests\StoreProtypesRequest;
use App\Http\Requests\UpdateProtypesRequest;

class ProtypesController extends Controller
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
        return view('admin.protype.protype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProtypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProtypesRequest $request, Protypes $protypes)
    {
        //
        return $protypes->StoreProtype($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function show(Protypes $protypes)
    {
        //
        $protypes = $protypes->where('type_status', 0)->get();
        return view('admin.protype.protypes', compact('protypes'));
    }

    /**
     * Display the specified resource (Recycle Bin).
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function showTrash(Protypes $protypes)
    {
        //
        $protype_trash = $protypes->where('type_status', 1)->get();
        return view('admin.protype.protypes', compact('protype_trash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function edit(Protypes $protypes, $id)
    {
        //
        $protype = $protypes->find($id);
        if ($protype) {
            return view('admin.protype.protype', compact('protype'));
        }
        return redirect()->route('protypes')->withSuccess('Your protype details are not valid');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProtypesRequest  $request
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProtypesRequest $request, Protypes $protypes)
    {
        //
        return $protypes->UpdateProtype($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protypes $protypes, $id)
    {
        //
        return $protypes->DeleteProtype($protypes,$id);
    }

    /**
     * Move the specified resource to Trash.
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function trash(Protypes $protypes, $id)
    {
        return $protypes->MoveToTrash($protypes, $id);
    }

    /**
     * Restore the specified resource from Trash.
     *
     * @param  \App\Models\Protypes  $protypes
     * @return \Illuminate\Http\Response
     */
    public function restore(Protypes $protypes, $id)
    {
        return $protypes->RestoreProtype($protypes, $id);
    }
}
