<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CustommerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
        return response()->json($customers);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'email'         => 'required|unique:customers',
            'phone'         => 'required|required|regex:/(01)[0-9]{9}/|unique:customers',
            'address'       => 'required|string',
        ]);
        $customer               = new Customer();
        $customer->name         = $request->name;
        $customer->email        = $request->email;
        $customer->phone        = $request->phone;
        $customer->address      = $request->address;
        if ($request->photo) {
            $position        = strpos($request->photo, ';');
            $sub             = substr($request->photo, 0, $position);
            $ext             = explode('/', $sub)[1];
            $name            = time() . "." . $ext;
            $img             = Image::make($request->photo)->resize(240, 240);
            $upload_path     = 'images/customers/';
            $imageUrl        = $upload_path . $name;
            $customer->photo = $imageUrl;
            $img->save($imageUrl);
        }
        $customer->save();
    }
    public function show(customer $customer)
    {
        return response()->json($customer);
    }
    public function update(Request $request, customer $customer)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'email'         => 'required|email|unique:customers,email,' . $customer->id,
            'phone'         => 'required|regex:/(01)[0-9]{9}/|unique:customers,phone,' . $customer->id,
            'address'       => 'required|string',
        ]);
        $customer->name         = $request->name;
        $customer->email        = $request->email;
        $customer->phone        = $request->phone;
        $customer->address      = $request->address;
        if ($request->newphoto) {
            if (file_exists($customer->photo)) {
                unlink($customer->photo);
            }
            $position        = strpos($request->newphoto, ';');
            $sub             = substr($request->newphoto, 0, $position);
            $ext             = explode('/', $sub)[1];
            $name            = time() . "." . $ext;
            $img             = Image::make($request->newphoto)->resize(240, 240);
            $upload_path     = 'images/customers/';
            $imageUrl        = $upload_path . $name;
            $customer->photo = $imageUrl;
            $img->save($imageUrl);
        }
        $customer->save();
    }
    public function destroy(customer $customer)
    {
        if (file_exists($customer->photo)) {
            unlink($customer->photo);
        }
        $customer->delete();
    }
}
