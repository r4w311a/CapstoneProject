<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminSettingsController extends Controller
{
    public function AdminSettings(){
        $adminData = Admin::find(1);
        
        return view('admin.admin_settings',compact('adminData'));
    }
}
