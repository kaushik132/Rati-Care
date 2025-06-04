<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home');
    }

    function product(){
        return view('product');
    }

    function productsDetails(){
        return view('productdetails');
    }
    function cart(){
        return view('cart');
    }
    function blog(){
        return view('blog');
    }
}
