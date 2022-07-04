<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCounter extends Component
{
    public function render()
    {

        $cart_counter = Cart::content()->count();
        return view('livewire.cart-counter', compact('cart_counter'));
    }
}
