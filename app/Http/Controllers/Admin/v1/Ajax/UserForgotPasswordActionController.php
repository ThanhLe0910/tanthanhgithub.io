<?php

namespace App\Http\Controllers\Admin\v1\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Mail;
use App\Models\ResetPasswordModel;
use Illuminate\Support\Str;
use App\Mail\MailForgotPassword;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Hash;

class UserForgotPasswordActionController extends Controller
{
    public function indexAction(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'email' =>'required|max:150|min:5|email',
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            };
            $account = UsersModel::where('email',$request->get('email'));
            if($account->count() && $account->count() >= 1 ) {
                /**
                 * Delete all old request 
                 */
                $request_reset = ResetPasswordModel::where('email',$request->get('email'));
                $request_reset->delete();
                /**
                 * Insert new request 
                 */
                $token = Str::random(8);
                $newRequest = ResetPasswordModel::insert([
                    'email' => $request->get('email'),
                    'token' => $token,
                    'created_at' => date('Y-m-d H:i:s',time())
                ]);
                if($newRequest) {
                    Mail::to($request->get('email'))->send(new MailForgotPassword($token));
                    return $this->respon("Check code reset by email",200);
                } else {
                    throw new Exception(" Can not request new password");
                }
            }
            
            throw new Exception("account is not exists",401);
        } catch (Exception $e) {
            return $this->respon($e->getMessage() ? $e->getMessage() : '',400);
        }
    }

    public function actionReset(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:150|min:5',
                'code' => 'required'
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            }
             /**
             * check user exists 
             */

            $account = UsersModel::select("users.*","password_resets.token as code_reset");
            $account = $account->join("password_resets","users.email","=","password_resets.email");
            $account = $account->where('users.email',$request->get('email'));
            $account = $account->where('password_resets.token',$request->get('code'));

            if($account->count() && $account->count() >= 1 ) {
                
                /**
                 * New password 
                 */

                $password = Str::random(8);
                $update = UsersModel::where('email',$request->get('email'))->update(array('password' => Hash::make($password))); 
                /**
                 * Delete all old request 
                 */
                $request_reset = ResetPasswordModel::where('email',$request->get('email'))->delete();
                if($update) {
                    /**
                     * Send new password to email account 
                     */
                    Mail::to($request->get('email'))->send(new ResetPasswordMail($password));
                    return $this->respon("admin_user.admin_user_check_inbox_your_email",200);
                } else {
                    throw new Exception("admin_user.admin_user_can_not_reset_password_please_try_again",400);
                }
            }
            throw new Exception("admin_user.account_is_not_exists",401);
        } catch(Exception $e) {
            return  $this->respon( $e->getMessage() ? $e->getMessage() : '', 
            $e->getCode() && $e->getCode() > 1 ? $e->getCode() : 500);
        }
    }
}