<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index($name)
    {
        $category = Category::where('name',$name)->first();
        $products = Product::where('cate_id',$category->id)->get();
        return view('user.viewAllCategories',compact('products','category'));
    }

    public function view($name)
    {
        $product = Product::where('name',$name)->first();
        return view('user.viewProduct',compact('product'));
    }

    public function addCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $qty = $request->input('qty');
        if(Auth::check()){
        
            if(Cart::where('pro_id',$product_id)->where('user_id',Auth::user()->id)->exists()){
                return back()->with('status',"already added");
            }
            else{
                $cartItem = new Cart();
                $cartItem->user_id = Auth::user()->id;
                $cartItem->pro_id = $product_id;
                $cartItem->qty = $qty;
                $cartItem->save();
                return redirect('/home')->with('status','cart added Successfully');
            }
        }
        else{
            return redirect('login');
        }
    }
}
