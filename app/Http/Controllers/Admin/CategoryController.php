<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'-'.$ext;
            $file->move('assets/uploads/category/',$fileName);
            $category->image = $fileName;
        }

        $category->name = $request->input('Name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? "1":"0";
        $category->popular = $request->input('popular') == TRUE ? "1":"0";
        $category->meta_descrip = $request->input('metaDescription');
        $category->meta_title = $request->input('metaTitle');
        $category->meta_keywords = $request->input('metaKeywords');
        $category->save();
        return redirect('/categories')->with('status',"category insert successfully");
    }

    public function editCategory($id)
    {
        $categorie = Category::find($id);
        return view('admin.category.edit',compact('categorie'));
    }

    public function updateCategory($id, Request $request)
    {
        $category = Category::find($id);

        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/category/'.$request->image;
            if(File::exists($path)){

                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'-'.$ext;
            $file->move('assets/uploads/category/',$fileName);
            $category->image = $fileName;
        }

        $category->name = $request->input('Name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? "1":"0";
        $category->popular = $request->input('popular') == TRUE ? "1":"0";
        $category->meta_descrip = $request->input('metaDescription');
        $category->meta_title = $request->input('metaTitle');
        $category->meta_keywords = $request->input('metaKeywords');
        $category->update();

        return redirect('/categories')->with('status',"category update successfully");;
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $path = 'assets/uploads/category/'.$category->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $category->delete();
        return redirect('/categories')->with('status',"category delete successfully");

    }
}
