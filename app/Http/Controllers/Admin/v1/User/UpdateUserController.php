<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;

class UpdateUserController extends Controller
{
    public function indexAction(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' =>'required|max:150|min:5',
                'phone' =>'required|max:11|min:10',
                'status' => 'required',
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)
            ->withInput();
            }
            $profile = new UsersModel();
            $profile = $profile->where('email',$request->get('email'))->first();
            if( $profile->count() && $profile->count() !== '' && $profile->count() > 0 ) {
                $update = $profile->update(array(
                    'name' => $request->get('name'),
                    'email' =>$request->get('email') ? $request->get('email') :'',
                    'company' => $request->get('company') ? $request->get('company') : '' ,
                    'position' =>$request->get('position')? $request->get('position') : '',
                    'phone' => $request->get('phone')? $request->get('phone'): '',
                    'avatar' =>$request->get('avatar') ? $request->get('avatar') : '',
                    'scancode' => $request->get('scancode') ? $request->get('scancode') :'',
                    'url_fb' =>$request->get('url_fb ') ? $request->get('url_fb') : '',
                    'url_zalo' => $request->get('url_zalo ') ? $request->get('url_zalo') : '',
                    'url_ins' =>$request->get('url_ins') ? $request->get('url_ins') : '',
                    'url_sky' =>$request->get('url_sky') ? $request->get('url_sky') :'',
                    'image_background' => $request->get('image_background ')? $request->get('image_background') :'',
                    'status' => $request->get('status'),
                    'updated_at' =>date('Y-m-d H:i:s',time()),
                ));
                if($update) {
                    $request->session()->put('update_password', 'successfully');
                } else {
                    $request->session()->put('update_password', 'failed');
                }
                return redirect()->back();
            };
        } catch (Exception $e) {
            return  $this->respon( $e->getMessage() ? $e->getMessage() : '', 
            $e->getCode() && $e->getCode() > 1 ? $e->getCode() : 500);
        }
    }
}