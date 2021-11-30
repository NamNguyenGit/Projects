<?php
namespace App\Common;

class Cart
{
    public $items = [];
    public $total_price = 0;
    public $total_qtt = 0;
    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->total_price = $this->getPrice();
        $this->total_qtt = $this->getQtt();
    }

    public function Add($product)
    {
        $id = $product->id;
        if(isset($this->items[$id])){
            $this->items[$id]['quantity'] += 1;
        }else{
            $item = [
                'id' => $id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->sale_price ? $product->sale_price : $product->price,
                'quantity' => 1
            ];

            $this->items[$id] = $item;
        }
        session(['cart' => $this->items]);
    }

    public function Remove($id)
    {
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }

    public function Update($id, $quantity)
    {
        if(isset($this->items[$id])){
            $this->items[$id]['quantity'] = $quantity;
        }
        session(['cart' => $this->items]);
    }

    private function getPrice()
    {
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity'] * $item['price'];
        }
        return $total;
    }

    private function getQtt()
    {
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity'];
        }
        return $total;
    }
}