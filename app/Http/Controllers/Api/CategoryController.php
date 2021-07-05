<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{

    public function index()
    {
       $categories=Category::latest()->get();
       return response()->json($categories);
    }



    public function store(Request $request)
    {
       $this->validate($request,[
           'name'=>'required|string|unique:categories',
           'photo'=>'required',
       ]);
       $category            =new Category;
       $category->name      =$request->name;
       $category->slug      =Str::slug($request->name);
       if($request->photo){
        $position           = strpos($request->photo, ';');
        $sub                = substr($request->photo, 0, $position);
        $ext                = explode('/', $sub)[1];
        $name               = time() . "." . $ext;
        $img                = Image::make($request->photo)->resize(240, 240);
        $upload_path        = 'images/categories/';
        $imageUrl           = $upload_path . $name;
        $category->photo    = $imageUrl;
        $img->save($imageUrl);
       }
       $category->save();

    }


    public function show(Category $category)
    {
       return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>'required|string|unique:categories,name,'.$category->id,
            'photo'=>'required',
        ]);
        $category->name      =$request->name;
        $category->slug      =Str::slug($request->name);
        if($request->newphoto){
            if(file_exists($category->photo)){
                unlink($category->photo);
            }
         $position           = strpos($request->newphoto, ';');
         $sub                = substr($request->newphoto, 0, $position);
         $ext                = explode('/', $sub)[1];
         $name               = time() . "." . $ext;
         $img                = Image::make($request->newphoto)->resize(240, 240);
         $upload_path        = 'images/categories/';
         $imageUrl           = $upload_path . $name;
         $category->photo    = $imageUrl;
         $img->save($imageUrl);
        }
        $category->save();
    }

    public function destroy(Category $category)
    {
        if(file_exists($category->photo)){
            unlink($category->photo);
        }
        $category->delete();
    }
}
