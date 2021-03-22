<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;

class CreateUserController extends Controller
{
    public function indexAction(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' =>'required|max:150|min:5',
                'phone' =>'required|max:11|min:10',
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)
            ->withInput();
            }
                $create = UsersModel::create([
                    'name' => $request->get('name'),
                    'password' => 1,
                    'email' =>$request->get('email') ? $request->get('email') :'',
                    'company' => $request->get('company') ? $request->get('company') : '' ,
                    'position' =>$request->get('position')? $request->get('position') : '',
                    'phone' => $request->get('phone')? $request->get('phone'): '',
                    'avatar' =>$request->get('avatar') ? $request->get('avatar') : '',
                    'scancode' => $request->get('scancode') ? $request->get('scancode') :'',
                    'url_fb' =>$request->get('url_fb') ? $request->get('url_fb') : '', 
                    'url_zalo' => $request->get('url_zalo') ? $request->get('url_zalo') : '',
                    'url_ins' =>$request->get('url_ins') ? $request->get('url_ins') : '',
                    'url_sky' =>$request->get('url_sky') ? $request->get('url_sky') :'',
                    'image_background' => $request->get('image_background')? $request->get('image_background') :'',
                    'created_at' => date('Y-m-d H:i:s',time()),
                    'updated_at' =>date('Y-m-d H:i:s',time()),
                ]);
                if($create) {
                    $request->session()->put('create_password', 'successfully');
                } else {
                    $request->session()->put('create_password', 'failed');
                }
                return redirect()->back();
        } catch (Exception $e) {
            return  $this->respon( $e->getMessage() ? $e->getMessage() : '', 400);
        }
    }
}