<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class FormUpdateUserController extends Controller
{
    public function indexAction($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.v1.user.update-user', array(
            'user' => $user,
        ));
    }
}