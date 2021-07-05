<?php

namespace App\Http\Controllers\Api;

use App\Models\Pos;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DateTime;

class OrderController extends Controller
{
    public function orderDone(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'pay' => 'required',
            'due' => 'required',
            'payby' => 'required',
            'subtotal' => 'required',
        ]);
        // return response()->json($request->all());
        $orderdone = new Order;
        $orderdone->customer_id = $request->customer_id;
        $orderdone->qty = $request->qty;
        $orderdone->sub_total = $request->subtotal;
        $orderdone->total = $request->total;
        $orderdone->vat = $request->vat;
        $orderdone->pay = $request->pay;
        $orderdone->due = $request->due;
        $orderdone->payby = $request->payby;
        $orderdone->order_data = date('d-m-y');
        $orderdone->order_month = date('F');
        $orderdone->order_year = date('Y');
        $orderdone->save();
        $order_id = $orderdone->id;


        $poss = Pos::all();



        foreach ($poss as $key=>$pos) {
            $order_detail = new Orderdetail();
            $order_detail->order_id = $order_id;
            $order_detail->product_id = $pos->product_id;
            $order_detail->product_qty = $pos->product_qty;
            $order_detail->product_price = $pos->product_price;
            $order_detail->sub_total = $pos->sub_total;
            $order_detail->save();

            DB::table('products')
                ->where('id', $pos->product_id)
                ->update(['product_quantity' => DB::raw('product_quantity -' . $pos->product_qty)]);
        }
        DB::table('pos')->delete();
    }
    public function Order()
    {
        $date = date('d-m-y');
        $orders = Order::latest()->where('order_data', $date)->with('customername')->get();
        return response()->json($orders);
    }
    public function Orderdetails($id)
    {
        $order_details = Order::with('customername')->where('id', $id)->first();
        return response()->json($order_details);
    }
    public function OrderdetailsAll($id)
    {
        $details = DB::table('orderdetails')
            ->join('products', 'orderdetails.product_id', 'products.id')
            ->where('orderdetails.order_id', $id)
            ->select('products.product_name', 'products.product_code', 'products.photo', 'orderdetails.*')
            ->get();
        return response()->json($details);
    }
    public function searchOrder(Request $request)
    {
       $this->validate($request,[
           'data'=>'required',
       ]);
       $newdate =date("d-m-y", strtotime($request->data));
       $orders=Order::with('customername')->where('order_data',$newdate)->get();
       return response()->json($orders);
    }
}
