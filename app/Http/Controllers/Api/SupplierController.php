<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::latest()->get();
        return response()->json($suppliers);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:60',
            'email'    => 'required|email',
            'phone'    => 'required|regex:/(01)[0-9]{9}/',
            'photo'    => 'required|',
            'shopname' => 'required|string',
            'address'  => 'required|string',
        ]);
        $supplier               =new Supplier();
        $supplier->name         =$request->name;
        $supplier->email        =$request->email;
        $supplier->phone        =$request->phone;
        $supplier->shopname     =$request->shopname;
        $supplier->address      =$request->address;
        //photo
        if ($request->photo){
            $position           = strpos($request->photo, ';');
            $sub                = substr($request->photo, 0, $position);
            $ext                = explode('/', $sub)[1];
            $name               = time() . "." . $ext;
            $img                = Image::make($request->photo)->resize(240, 240);
            $upload_path        = 'images/suppliers/';
            $imageUrl           = $upload_path . $name;
            $supplier->photo    = $imageUrl;
            $img->save($imageUrl);
        }
        $supplier->save();

    }
    public function show(Supplier $supplier)
    {
        return response()->json($supplier);
    }
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:60',
            'email'    => 'required|email',
            'phone'    => 'required|regex:/(01)[0-9]{9}/',
            'photo'    => 'required|',
            'shopname' => 'required|string',
            'address'  => 'required|string',
        ]);
        $supplier->name         =$request->name;
        $supplier->email        =$request->email;
        $supplier->phone        =$request->phone;
        $supplier->shopname     =$request->shopname;
        $supplier->address      =$request->address;
        //photo
        if ($request->newphoto){
            if(file_exists($request->photo)){
                unlink($request->photo);
            }
            $position           = strpos($request->newphoto, ';');
            $sub                = substr($request->newphoto, 0, $position);
            $ext                = explode('/', $sub)[1];
            $name               = time() . "." . $ext;
            $img                = Image::make($request->newphoto)->resize(240, 240);
            $upload_path        = 'images/suppliers/';
            $imageUrl           = $upload_path . $name;
            $supplier->photo    = $imageUrl;
            $img->save($imageUrl);
        }
        $supplier->save();
    }
    public function destroy(Supplier $supplier)
    {
      if(file_exists($supplier->photo)){
          unlink($supplier->photo);
      }
      $supplier->delete();
    }
}
