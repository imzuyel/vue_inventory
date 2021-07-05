<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function customername()
    {
        return $this->belongsTo(Customer::class,'customer_id')->select('id','name');
    }
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
