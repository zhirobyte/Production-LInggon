<?php

namespace App\Http\Controllers;
app('App\Http\Controllers\ProductController')->method();

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $dataproduct = Product::all();
        return view('home', compact('dataproduct'));
    }


    public function adminHome()
    {
        return view('adminHome');
    }
}
