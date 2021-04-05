<?php

namespace App\Http\Controllers\Admin\v1;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect("/admin-user/login");
    }
}