<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;

class indexController extends Controller
{
     public function index()
     {
          $products = Product::get()->all();

          $new_arrivals = Product::where('new_arrivals', 1)->limit(8)->get();
          $featured = Product::where('featured', 1)->limit(4)->get();
          $cart = Cart::content();
          return view('main.index', compact('products', 'new_arrivals', 'featured', 'cart'));
     }

     public function dashboard()
     {
          $orders = Order::where('user_id', auth()->user()->id)->get();
          
          return view('dashboard', compact('orders'));
     }

     public function OrderDetails($order_id){
          $order = Order::where('id', $order_id)->where('user_id', auth()->user()->id)->first();
          $orderItem = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();
          return view('main.sections.order_details', compact('order','orderItem'));
     }

     public function productDetails($id)
     {
          $product = Product::findOrFail($id);
          $subcategory = SubCategory::findOrFail($product->subcategory_id);
          $related = Product::where('category_id', $product->category_id)->where('id', '!=', $id)->limit(4)->get();
          $color = $product->product_color;
          $product_color = explode(',', $color);
          $size = $product->product_size;
          $product_size = explode(',', $size);

          $cart = Cart::content();
          return view('main..sections.product_details', compact('product', 'related', 'product_color', 'product_size', 'cart','subcategory'));
     }

     public function viewSubcategory($id)
     {
          
          $subcategory = Subcategory::findOrFail($id);
          
          if (Request::get('sort') == 'price_asc'){
               $products = Product::where('subcategory_id', $id)->where('status', 1)->orderBy('selling_price', 'ASC')->get();

          }
          elseif (Request::get('sort') == 'price_desc'){
               $products = Product::where('subcategory_id', $id)->where('status', 1)->orderBy('selling_price', 'DESC')->get();
          }
          elseif (Request::get('sort') == 'newest'){
               $products = Product::where('subcategory_id', $id)->where('status', 1)->orderBy('created_at', 'DESC')->get();
          }
          elseif (Request::get('sort') == 'older'){
               $products = Product::where('subcategory_id', $id)->where('status', 1)->orderBy('created_at', 'ASC')->get();
          }
          else {
               $products = Product::where('subcategory_id', $id)->latest()->paginate(15);
          }


          return view('main.sections.subcategories', compact('subcategory', 'products'));
     }

     public function search(){
          $query = Request::get('product');
          $products = Product::where('product_name', 'like', '%' . $query . '%')->get();
          return view('main.sections.search', compact('products'));
     }
    
}
