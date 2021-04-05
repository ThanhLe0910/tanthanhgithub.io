<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function indexAction()
    {
        if(Auth::check()){
            return redirect(route('Dashboard'));
        }
        return view('admin.v1.user.login');
    }
}