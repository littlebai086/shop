<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartShopping extends Component
{
    public $shopping_cart;
    public function render()
    {
        return view('livewire.cart-shopping');
    }
}
