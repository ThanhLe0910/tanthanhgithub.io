<?php

namespace App\Http\Controllers\Admin\v1\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;

class UserLoginController extends Controller
{
    public function indexAction(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'email' =>'required|max:150|min:5|email',
                'password' =>'required|max:36|min:6',
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            };
            $credentials= ['email' => $request->get('email'), 'password' => $request->get('password'),'status' => '1'];
            
            if (Auth::attempt($credentials)) {
                return $this->respon(array(
                   'redirect_url' => route('Dashboard')
                ),200);   
           }
           throw new Exception("login failed",401);
        } catch (Exception $e) {
            return $this->respon($e->getMessage() ? $e->getMessage() : '',400);
        }
    }
}