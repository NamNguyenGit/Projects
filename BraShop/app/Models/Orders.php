<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['id','customer_id','name','address','phone','email','amount','note','created_at','status'];

    public function JoinCustomer()
    {
    	return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function JoinOrderDetail()
    {
    	return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
