<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        $category = Category::all();

        return view('admin.product.add',compact('category'));
    }

    public function addProduct(Request $request)
    {
        $product = new Product();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $text = $file->getClientOriginalExtension();
            $fileName = time()."-".$text;
            $file->move('assets/uploads/products/',$fileName);
            $product->image = $fileName;
        }
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('Name');
        $product->small_text = $request->input('small_text');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? "1":"0";
        $product->trending = $request->input('trending') == TRUE ? "1":"0";
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        $product->save();
        return redirect('/products')->with('status',"product insert successfully");
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit',compact('product','category'));
    }

    public function updateProduct($id, Request $request)
    {
        $product = Product::find($id);

        
            if($request->hasFile('image'))
            {
                $path = 'assets/uploads/products/'.$request->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $text = $file->getClientOriginalExtension();
                $fileName = time()."-".$text;
                $file->move('assets/uploads/products/',$fileName);
                $product->image = $fileName;
            }    

        
        
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('Name');
        $product->small_text = $request->input('small_text');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? "1":"0";
        $product->trending = $request->input('trending') == TRUE ? "1":"0";
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        $product->save();
        return redirect('/products')->with('status',"product update successfully");

    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $path = 'assets/uploads/products/'.$product->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $product->delete();
        return redirect('/products')->with('status',"product delete successfully");
    }
}
