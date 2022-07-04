<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function user_orders($id){
        $user = User::find($id);
        $orders = Order::where('user_id', $id)->latest()->paginate(5);
        return view('admin.users.user_orders', compact('user','orders'));
    }
}
