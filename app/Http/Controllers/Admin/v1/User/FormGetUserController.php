<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\SendMessModel;

class FormGetUserController extends Controller
{
    public function indexAction($id)
    {
        $getuser = User::where('id',$id)->first();
        $Send = SendMessModel::where('user_id',$id)->get();
        return view('admin.v1.user.getview-user', array(
            'getuser' => $getuser,
            'Send'=> $Send,
        ));
    }
}