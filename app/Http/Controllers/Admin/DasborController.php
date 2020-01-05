<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DasborController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('admin.dasbor.list');
        }
        //    return Redirect::to("login")->withSuccess('Opps! You do not have access');
        // return view('admin.dasbor.list');
        // return redirect('/admin/dasbor','refresh');
        return redirect('/login')->with('status', 'Login dulu bray!');

    }
}
