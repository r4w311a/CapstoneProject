<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
class LogoutController extends Controller
{
    public function perform()
    {
        Session::flush();
        
        auth('web')->logout();
        
        toast('You logged out succesffully','success');

        return redirect('login');
    }
    public function destroy()
    {
        Session::flush();
        
        auth('admin')->logout();
        
        toast('You logged out succesffully','success');

        return redirect('login');
    }
}
