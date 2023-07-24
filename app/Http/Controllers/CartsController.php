<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;
use App\Models\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    //

    function show(Carts $carts)
    {
        $carts = $carts->where('user_id', Auth::id())->get();
        return view('shop-cart', compact('carts'));
    }

    function store(StoreCartsRequest $request, Carts $carts)
    {
        return $carts->StoreCart($request);
    }

    function update(UpdateCartsRequest $request, Carts $carts)
    {
        return $carts->UpdateCart($request);
    }

    function destroy(Carts $carts, $id)
    {
        return $carts->DeleteCart($carts, $id);
    }

    function testFunction($a = 10){
        return $a;
    }
}
