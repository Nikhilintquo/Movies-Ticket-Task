<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $admin = new Admin();
        if($request->email == "admin@admin.com" && $request->password == "password"){
            $admin->email = "admin@admin.com";
            $admin->password = "password";
            $admin->save();
            return redirect()->route('dashboard');
        }else{
            session([
                'alert' => 'Please enter correct login details',
                'class' => 'alert alert-danger',
            ]);
            return view('login');
        }

        // $admin->save();
        // return view('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
