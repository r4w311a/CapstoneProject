<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSettingsController extends Controller
{
    public function AdminSettings(){
        $adminData = Admin::find(1);
        
        return view('admin.admin_settings',compact('adminData'));
    }

    public function changePassword(Request $request){
        $vaidateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Admin::find(1)->password;
        if (Hash::check($request->oldpassword,$hashedPassword)){
            Admin::find(1)->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('success','Password changed successfully');
        }
       else {
            return redirect()->back()->with('error','Old password is incorrect');
        }

    }
}
