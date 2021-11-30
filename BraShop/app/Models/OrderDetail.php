<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'orderdetail';
    protected $fillable = ['order_id','product_id','price_unit','quantity'];

    public function JoinProduct()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
