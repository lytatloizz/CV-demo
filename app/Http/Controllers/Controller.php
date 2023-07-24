<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Carts;
use App\Models\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {
        $products = Products::protype('1');
        $productsC = Products::protype('3');
        return view('/index', compact('products', 'productsC'));
    }
    function about()
    {
        $blogs = Blog::all();
        return view('/about', compact('blogs'));
    }
    function menu()
    {
        $products = Products::protype('1');
        $productsC = Products::protype('3');
        return view('/menu', compact('products', 'productsC'));
    }
    function contact()
    {
        return view('/contact');
    }
    function reservation()
    {
        return view('/reservation');
    }
    function service()
    {
        return view('/service');
    }
    function testimonial()
    {
        return view('/testimonial');
    }
    function shop(Request $request)
    {
        $key = $request->get('query');
        $searchs = Products::search_ajax($key);
        $products = Products::index();
        return view('shop', compact('searchs', 'products'));
    }
    function detail($key)
    {
        $product = Products::find($key);
        $relaproducts = Products::protype($product->type_id);
        $cart = Carts::where('product_id', $product->product_id)->first();
        return view('/detail', compact('relaproducts', 'product', 'cart'));
    }
    function blog($key)
    {
        $blogs = Blog::Blogbyid($key);
        return view('/blog', compact('blogs'));
    }
    function shop_cart()
    {
        return view('/shop-cart');
    }
    function login()
    {
        return view('/login');
    }
}
