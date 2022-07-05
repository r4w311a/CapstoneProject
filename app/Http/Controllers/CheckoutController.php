<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Carbon;


class checkoutController extends Controller
{
    public function checkout(Request $request){
        $total = Cart::total();
        $order_id = Order::insertGetId([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
    
            'payment_method' => 'Cash',
            'currency' => 'USD',
            'amount' => $total,
            
            
            'invoice_no' => 'MALKAWI'.mt_rand(1000000, 9999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'Processing',
            'created_at' => Carbon::now(),
    
            ]);




            $carts = Cart::content();
            foreach ($carts as $cart){
                OrderItem::insert([
                    'order_id' => $order_id,
                    'product_id' => $cart->id,
                    'color' => $cart->options->color,
                    'size' => $cart->options->size,
                    'qty' => $cart->qty,
                    'price' => $cart->price,
                    'created_at' => Carbon::now(),
                ]);
    
            }
            Cart::destroy();
            toast('Your order has been placed successfully','success');
            return redirect('/dashboard');
    }
}
