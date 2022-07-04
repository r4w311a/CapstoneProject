<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function view_orders(){
        $pending_orders = Order::where('status', 'Pending')->latest()->paginate(5);
        $confirmed_orders = Order::where('status', 'Confirmed')->latest()->paginate(5);
        $processing_orders = Order::where('status', 'Processing')->latest()->paginate(5);
        return view('admin.orders.index', compact('pending_orders','confirmed_orders','processing_orders'));
    }

    public function PendingDetails($order_id){

        $order = Order::where('id', $order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();


        return view('admin.orders.pending_details', compact('order', 'orderItem'));
    }

    public function pendingConfirm($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Confirmed';
        $order->save();
        return redirect()->back()->with('success', 'Order Confirmed Successfully');
    }

    
    public function confirmProcess($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->status = 'Processing';
        $order->save();
        return redirect()->back()->with('success', 'Order Processed Successfully');
    }

}
