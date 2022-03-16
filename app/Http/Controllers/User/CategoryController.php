<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
}
