<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;

class UserResetPasswordController extends Controller
{
    public function indexAction()
    {
        return view('admin.v1.user.reset-password');
    }
}