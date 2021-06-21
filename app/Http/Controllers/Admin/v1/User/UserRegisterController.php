<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;

class UserRegisterController extends Controller
{
    public function indexAction()
    {
        if(Auth::check()){
            return redirect(route('Dashboard'));
        }
        return view('admin.v1.user.register');
    }
}