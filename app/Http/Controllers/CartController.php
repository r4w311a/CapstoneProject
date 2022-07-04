<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Collection\SubTotal;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class CartController extends Controller
{
    public function index()
    {

        $latest = Product::latest()->limit(4)->get();
        $cart_items = Cart::content();
      
        return view('main.sections.cart', compact('cart_items','latest'));
    }
    
    public function AddToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
     


        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'qty' => $request->quantity,
            'price' => $product->selling_price,
            'weight' => 0,
            'options' => [
            'image' => $product->product_thumbnail,
            'size' => $request->size,
            'color' => $request->color,
                ]])->Associate('App\Models\Product');
                
        
            toast('Product added to cart successfully','success');

        return redirect()->back();
    }

    public function removeFromCart(Request $request)
    {
        toast('Items removed successfully','success');
        Cart::remove($request->rowId);
        return redirect()->back();
    }
    public function updateQty(Request $request)
    {
        if ($request->increase) {
            $new_qty = $request->quantity + 1;
        }
        else {
            $new_qty = $request->quantity - 1;
        }
        Cart::update($request->rowId, $new_qty);
        
        toast('Item modified successfully','success');
        return redirect()->back()->with('success', 'Product Quantity Increase!');
    }
    
    public function checkout(){
        $authenticatedUser = auth()->user();
        $cart_items = Cart::content();
        if ($cart_items->count() > 0) {
            return view('main.sections.checkout', compact('cart_items','authenticatedUser'));
        }
        else {
            
            toast('Cart is empty','error');
            return redirect()->back();
        }
        return view('main.sections.checkout', compact('cart_items','authenticatedUser'));
    }
   
    public function store_checkout(Request $request){
        $total = Cart::total();
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['address'] = $request->address;


        if ($request->payment_method == 'stripe') {
            return view('main.sections.stripe',compact('data'));
        }
        else
        {
            return view('main.sections.cash',compact('data','total'));
        }
       
    }


}
