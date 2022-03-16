<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trending = Product::where("trending","1")->get();
        $categories = Category::where('status','1')->get();
        return view('home',compact('trending','categories'));
    }

    public function cart()
    {
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        return view('user.cart',compact('carts'));
    }
}
