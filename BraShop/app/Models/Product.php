<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['name','category_id','price','sale_price','content','image','color_id','size_id','quantity','status'];

    public function JoinCategory()
    {
    	return $this->hasOne(Category::class,'id','category_id');
    }
    public function JoinColor()
    {
    	return $this->hasOne(Color::class,'id','color_id');
    }
    public function JoinSize()
    {
        return $this->hasOne(Size::class,'id','size_id');
    }
}
