<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use App\Models\UsersModel;

class UserController extends Controller
{
    public function indexAction()
    {
        $User= UsersModel::all();
        return view('admin.v1.user.user',array(
            'User' => $User,
        ));
    }
}