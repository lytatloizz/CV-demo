<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        return view('/index');
    }
    function about(){
        return view('/about');
    }
    function menu(){
        return view('/menu');
    }
    function contact(){
        return view('/contact');
    }
    function reservation(){
        return view('/reservation');
    }
    function service(){
        return view('/service');
    }
    function testimonial(){
        return view('/testimonial');
    }
    function shop(){
        return view('/shop');
    }
    function detail(){
        return view('/detail');
    }
    function blog(){
        return view('/blog');
    }
    function shop_cart(){
        return view('/shop-cart');
    }
    function login(){
        return view('/login');
    }
}
