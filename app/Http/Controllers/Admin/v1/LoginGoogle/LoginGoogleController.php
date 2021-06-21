<?php

namespace App\Http\Controllers\Admin\v1\LoginGoogle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginGoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handdleGoogleCallBack($value= ''){
        try {
            $user = Socialite::driver('google')->user();
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $user = User::where('google_id',$user->id)->first();
            if(!empty($user)){
                Auth::login($user);
                return redirect('/admin/dashboard');
            }else {
            $newUser = User::create([
                    'name' => $name,
                    "email" => $email,
                    "google_id" => $id,
                    'status' =>  '1',
                ]);
                Auth::login($newUser);

                return redirect('/admin/dashboard');
            }
            } catch (Exception $e) {
                return $this->respon($e->getMessage() ? $e->getMessage() : '',400);
            }
    }
}
