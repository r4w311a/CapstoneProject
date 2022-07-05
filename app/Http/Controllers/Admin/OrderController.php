<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function view_orders(){
        $processing_orders = Order::where('status', 'Processing')->latest()->paginate(5);
        $shipped_orders = Order::where('status', 'Shipped')->latest()->paginate(5);
        $delivered_orders = Order::where('status', 'Delivered')->latest()->paginate(5);
        $completed_orders = Order::where('status', 'Completed')->latest()->paginate(5);
        $cancelled_orders = Order::where('status', 'Cancelled')->latest()->paginate(5);
        return view('admin.orders.index', compact('processing_orders','shipped_orders','delivered_orders','completed_orders','cancelled_orders'));
    }

    public function PendingDetails($order_id){

        $order = Order::where('id', $order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();


        return view('admin.orders.pending_details', compact('order', 'orderItem'));
    }

    public function shipped($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Shipped';
        $order->save();
        return redirect()->back()->with('success', 'Order Shipped Successfully');
    }

    public function delivered($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Delivered';
        $order->save();
        return redirect()->back()->with('success', 'Order Delivered Successfully');
    }
    public function completed($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Completed';
        $order->save();
        return redirect()->back()->with('success', 'Order Completed Successfully');
    }
    public function cancelled($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Cancelled';
        $order->save();
        return redirect()->back()->with('success', 'Order Cancelled Successfully');
    }
  
    
}
