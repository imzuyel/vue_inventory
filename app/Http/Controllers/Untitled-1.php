$details =DB::table('orderdetails')
       ->join('products','orderdetails.product_id','products.id')
       ->where('orderdetails.order_id',$id)
       ->select('products.product_name','products.product_code','products.photo','orderdetails.*')
       ->get();
       return response()->json($details);
