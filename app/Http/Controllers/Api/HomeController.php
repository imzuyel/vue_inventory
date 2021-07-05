<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function sell()
    {
        $today=date('d-m-y');
        $sell=Order::where('order_data',$today)->sum('total');
        return response()->json($sell);
    }
    public function paid()
    {
        $today=date('d-m-y');
        $paid=Order::where('order_data',$today)->sum('pay');
        return response()->json($paid);
    }
    public function due()
    {
        $today=date('d-m-y');
        $due=Order::where('order_data',$today)->sum('due');
        return response()->json($due);
    }
}
