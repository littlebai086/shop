<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function getQuantityStock($cartContent){
        foreach ($cartContent as $row) {
            $product = Product::find($row->id);
            if($product->quantity - $row->quantity < 0){
                flash($product->name."目前商品數量只剩".$product->quantity)->error();
                return false;
            }
        }
        return true;
    }
}
