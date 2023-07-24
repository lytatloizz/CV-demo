<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Manufactures;
use App\Models\Protypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $manus = Manufactures::all();
        $types = Protypes::all();
        return view('admin.product.product-add', compact('manus', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request, Products $product)
    {
        // Check if a file was uploaded
        if ($request->hasFile('file-input')) {
            $file = $request->file('file-input');

            // Move the uploaded file to the desired location
            // The 'move()' method requires the target directory and the desired filename
            // The second argument is the filename, or you can keep the original filename using 'getClientOriginalName()'
            $file->move(public_path('img'), $request->file('file-input')->getClientOriginalName());
        }

        // Xử lý dữ liệu từ request và định rõ cột tương ứng trong database
        $product->StoreProduct($request);

        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
        $products = $products->where('product_status', 0)->get();
        return view('admin.product.products', compact('products'));
    }

    /**
     * Display the specified resource (Recycle Bin).
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function showTrash(Products $products)
    {
        //
        $products_trash = $products->where('product_status', 1)->get();
        return view('admin.product.products', compact('products_trash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products, $id)
    {
        //
        $product = $products->find($id);
        if ($product) {
            $manus = Manufactures::all();
            $types = Protypes::all();
            return view('admin.product.product-add', compact('manus', 'types', 'product'));
        } else {
            return redirect()->route('products')->withSuccess('Your product details are not valid');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products~
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        // Check if a file was uploaded
        if ($request->hasFile('file-input')) {
            $file = $request->file('file-input');

            // Move the uploaded file to the desired location
            // The 'move()' method requires the target directory and the desired filename
            // The second argument is the filename, or you can keep the original filename using 'getClientOriginalName()'
            $file->move(public_path('img'), $request->file('file-input')->getClientOriginalName());
        }
        //
        $products->UpdateProduct($request, $products);
        return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products, $id)
    {
        //
        return $products->DeleteProduct($id);
    }

    /**
     * Move the product to trash.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function trash(Products $products, $id)
    {
        //
        return $products->MoveToTrash($products, $id);
    }

    /**
     * Restore the product form trash.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function restore(Products $products, $id)
    {
        //
        return $products->RestoreProduct($products, $id);
    }

    public function search_ajax(Request $request)
    {
        $key = $request->get('query');
        $searchs = Products::search_ajax($key);
        return view('ajax.search-ajax-result', compact('searchs'));
    }
    public function show_ajax()
    {
        $products = Products::index();
        return view('ajax.search-ajax-show', compact('products'));
    }
}
