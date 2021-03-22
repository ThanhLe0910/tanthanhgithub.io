<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class FormCreateUserController extends Controller
{
    public function indexAction()
    {
        return view('admin.v1.user.create-user');
    }
}