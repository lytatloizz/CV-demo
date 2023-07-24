<?php

namespace App\Models;

use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;
use App\Models\Carts as ModelsCarts;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Carts extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'cart_id';

    public function StoreCart(StoreCartsRequest $request){
        $cart = new Carts();
        $cart->cart_name = $request->product_name;
        $cart->product_id = $request->product_id;
        $cart->cart_price = $request->product_price;
        $cart->cart_qty = $request->product_qty;
        $cart->cart_img = $request->product_img;
        $cart->user_id = Auth::id();
        $cart->save();

        return redirect()->route('shop');
    }

    public function UpdateCart(UpdateCartsRequest $request){
        $cart = Carts::find($request->cart_id);
        $cart->cart_qty = $request->product_old_qty + $request->product_qty;
        $cart->update();

        return redirect()->route('shop');
    }

    public function DeleteCart(Carts $carts ,$id){
        $cart = $carts->find($id);
        if($cart){
            $cart->delete();
            return redirect()->route('shopCart');
        }
        return redirect()->route('shopCart')->withSuccess('Your product are not valid');
    }
}
