<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::latest()->with('categoryname')->get();
        return response()->json($products);
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id'       =>'required',
            'supplier_id'       =>'required',
            'product_name'      =>'required|string',
            'root'              =>'string',
            'buying_price'      =>'string',
            'selling_price'     =>'required|string',
            'product_quantity'  =>'required|string',
        ]);
        $product                   =new Product;
        $product->category_id      =$request->category_id;
        $product->supplier_id      =$request->supplier_id;
        $product->product_name     =$request->product_name;
        $product->product_code     =Str::slug($request->product_name).'-'.$request->category_id.'-'.$request->supplier_id;
        $product->root             =$request->root;
        $product->buying_price     =$request->buying_price;
        $product->selling_price    =$request->selling_price;
        $product->buying_date      =$request->buying_date;
        $product->product_quantity =$request->product_quantity;

        if ($request->photo) {
            $position              = strpos($request->photo, ';');
            $sub                   = substr($request->photo, 0, $position);
            $ext                   = explode('/', $sub)[1];
            $name                  = time() . "." . $ext;
            $img                   = Image::make($request->photo)->resize(400, 400);
            $upload_path           = 'images/products/';
            $imageUrl              = $upload_path . $name;
            $product->photo        = $imageUrl;
            $img->save($imageUrl);
        }
        $product->save();
    }


    public function show(Product $product)
    {
        return response()->json($product);
    }





    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'category_id'       =>'required',
            'supplier_id'       =>'required',
            'product_name'      =>'required|string',
            'root'              =>'string',
            'buying_price'      =>'string',
            'selling_price'     =>'required|string',
            'product_quantity'  =>'required|string',
        ]);
        $product->category_id      =$request->category_id;
        $product->supplier_id      =$request->supplier_id;
        $product->product_name     =$request->product_name;
        $product->product_code     =Str::slug($request->product_name).'-'.$request->category_id.'-'.$request->supplier_id;
        $product->root             =$request->root;
        $product->buying_price     =$request->buying_price;
        $product->selling_price    =$request->selling_price;
        $product->buying_date      =$request->buying_date;
        $product->product_quantity =$request->product_quantity;

        if ($request->newphoto) {
            if(file_exists($product->photo)){
                unlink($product->photo);
            }
            $position              = strpos($request->newphoto, ';');
            $sub                   = substr($request->newphoto, 0, $position);
            $ext                   = explode('/', $sub)[1];
            $name                  = time() . "." . $ext;
            $img                   = Image::make($request->newphoto)->resize(240, 240);
            $upload_path           = 'images/products/';
            $imageUrl              = $upload_path . $name;
            $product->photo        = $imageUrl;
            $img->save($imageUrl);
        }
        $product->save();
    }


    public function destroy(Product $product)
    {
        if(file_exists($product->photo)){
            unlink($product->photo);
        }
        $product->delete();
    }
    public function upateStock(Request $request, $id)
    {
        $this->validate($request,[
            'product_quantity'  =>'required|string',
        ]);
        $product=Product::find($id);
        $product->product_quantity=$request->product_quantity;
        $product->save();

    }
    public function categoryProduct($id)
    {
        $products=Product::where('category_id',$id)->get();
        return response()->json($products);
    }


}
