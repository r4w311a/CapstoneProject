<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class IndexController extends Controller
{
    public function index(){
        $orders = Order::latest()->get();
        $users = count(User::latest()->get());
        $total = Order::sum('amount');
        return view('admin.index',compact('orders','users','total'));
    }
}
