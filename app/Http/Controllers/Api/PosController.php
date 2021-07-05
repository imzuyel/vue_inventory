<?php

namespace App\Http\Controllers\Api;

use App\Models\Pos;
use App\Models\Vat;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PosController extends Controller
{

    public function cartProduct()
    {
        $cartProducts = Pos::all();
        return response()->json($cartProducts);
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $check = Pos::where('product_id', $id)->first();
        if ($check) {
            $check->increment('product_qty');
            $check->sub_total = ($check->product_qty) * $check->product_price;
            $check->save();
        } else {
            $pos = new Pos;
            $pos->product_id = $product->id;
            $pos->product_name = $product->product_name;
            $pos->product_qty = 1;
            $pos->product_price = $product->selling_price;
            $pos->sub_total = $product->selling_price;
            $pos->save();
        }
    }
    public function cartRemove($id)
    {
        $product = Pos::findOrFail($id);
        $product->delete();
    }
    public function cartDecrement($id)
    {
        $product = Pos::findOrFail($id);
        $product->decrement('product_qty');
        $product->sub_total = $product->product_qty * $product->product_price;
        $product->save();
    }
    public function cartIncrement($id)
    {
        $product = Pos::findOrFail($id);
        $product->increment('product_qty');
        $product->sub_total = $product->product_qty * $product->product_price;
        $product->save();
    }
    public function vat()
    {
        $vats = Vat::all();
        return  response()->json($vats);
    }
    public function first()
    {
        $vats = Vat::latest()->first();
        return  response()->json($vats);
    }
    public function vatStore(Request $request)
    {
        $this->validate($request, [
            'vat' => 'required'
        ]);
        $vat = new Vat();
        $vat->vat = $request->vat;
        $vat->date = date('d/m/y');
        $vat->save();
    }
    public function vatShow($id)
    {
        $vat = Vat::findOrFail($id);
        return response()->json($vat);
    }
    public function vatUpdate(Request $request, $id)
    {
        $vat = Vat::findOrFail($id);
        $vat->vat = $request->vat;
        $vat->save();
    }
}
