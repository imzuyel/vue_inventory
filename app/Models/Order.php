<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function customername()
    {
        return $this->belongsTo(Customer::class,'customer_id')->select('id','name','phone','address','photo','email');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'product_id');
    }
}
