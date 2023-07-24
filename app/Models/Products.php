<?php

namespace App\Models;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Products extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    public function scopeProtype($query, $status)
    {
        return $query->where('type_id', $status)->paginate(5);
    }

    public function scopeSearch_ajax($query, $key)
    {
        return $query->where('product_name', 'LIKE', '%' . $key . '%')->paginate(6);
    }

    // public function scopeFindbyid($query,$id){
    //     return $query->where('product_id', $id);
    // }

    public function scopeIndex()
    {
        return DB::table('products')->paginate(6);
    }

    public function UpdateProduct(UpdateProductsRequest $request, Products $product)
    {
        $product = Products::find($request->product_id);
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        if ($request->file('file-input')) {
            $product->product_img = $request->file('file-input')->getClientOriginalName();
        } else {
            $product->product_img = $request->input('product_img');
        }
        $product->product_qty = $request->input('product_qty');
        $product->type_id = $request->input('product_type');
        $product->manu_id = $request->input('product_manufactory');
        $product->product_feature = $request->input('product_feature');
        $product->product_sold = $request->input('product_sold');
        $product->product_status = $request->input('product_status');
        $product->save();
    }

    public function StoreProduct(StoreProductsRequest $request)
    {
        $product = new Products();
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->product_img = $request->file('file-input')->getClientOriginalName();
        $product->product_qty = $request->input('product_qty');
        $product->type_id = $request->input('product_type');
        $product->manu_id = $request->input('product_manufactory');
        $product->product_feature = $request->input('product_feature');
        $product->save();
    }

    public function MoveToTrash(Products $product, $id)
    {
        $product = Products::find($id);
        if($product){
            $product->product_status = 1;
            $product->update();
            return redirect()->route('products');
        }
        return redirect()->route('products')->withSuccess('Your product are not valid');
    }

    public function RestoreProduct(Products $product, $id)
    {
        $product = Products::find($id);
        if($product){
            $product->product_status = 0;
            $product->update();
            return redirect()->route('productsTrash');
        }
        return redirect()->route('productsTrash')->withSuccess('Your product are not valid');
    }
    
    public function DeleteProduct($id)
    {
        $product = Products::find($id);
        if($product){
            $product->delete();
            return redirect()->route('productsTrash');
        }

        return redirect()->route('productsTrash')->withSuccess('Your product are not valid');
    }
}
