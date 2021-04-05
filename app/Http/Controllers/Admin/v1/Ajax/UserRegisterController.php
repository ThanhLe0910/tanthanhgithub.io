<?php

namespace App\Http\Controllers\Admin\v1\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function indexAction(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:150',
                'email' =>'required|max:150|min:5|email|unique:users',
                'password' =>'required|max:36|min:6|confirmed',
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            };

            $createUser = UsersModel::create([
                'name' => $request->get('name'),
                'email' =>$request->get('email'),
                'password' =>Hash::make($request->get('password')),
                'company' =>  '' ,
                'position' => '',
                'phone' => 1,
                'avatar' => '4.jpg',
                'scancode' =>'',
                'url_fb' => '', 
                'url_zalo' => '',
                'url_ins' => '',
                'url_sky' =>'',
                'image_background' =>'',
                'status' =>  '0',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' =>date('Y-m-d H:i:s',time()),
            ]);
            if(!isset($createUser->id) || $createUser->id < 1) {
                throw new Exeption(__("Register failed"),400);
            }
            return $this->respon($createUser,200);
        } catch (Exception $e) {
            return $this->respon($e->getMessage() ? $e->getMessage() : '',400);
        }
    }
}