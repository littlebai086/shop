<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
class CartTotal extends Component
{
    public $total;
    public function render()
    {
        return view('livewire.cart-total');
    }

    public function mount(){
        $this->init();
    }

    public function init(){
        $user = Auth::user();
        $totals=0;
        $shopping_totals = ShoppingCart::where('user_id',$user->id)
                                    ->orderBy('created_at','desc')
                                    ->get();
        foreach($shopping_totals as $shopping_total)
        {
            $totals+=$shopping_total['price']*$shopping_total['qty'];
        }
        $this->total = $totals;
    }
}
