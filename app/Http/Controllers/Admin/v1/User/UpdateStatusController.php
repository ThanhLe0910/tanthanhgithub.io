<?php

namespace App\Http\Controllers\Admin\v1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\UsersModel;

class UpdateStatusController extends Controller
{
    public function indexAction(Request $request,$id){
        try { 
            $validator = Validator::make($request->all(), [
                'status' => 'required',
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            };
            $profile = new UsersModel();
            $profile = $profile->where('email','!=',Auth::user()->email);
            $profile = $profile->where('id',$id);
            if( $profile->count() && $profile->count() !== '' && $profile->count() > 0 ) {
                $update = $profile->update(array(
                    'status' => $request->get('status'),
                ));
                if($update) {
                    /**
                     * Check status
                     */
                    return $this->respon("Update status pass",200);
                } else {
                    throw new Exception("Update status fail",400);
                }
            };
        } catch (Exception $e) {
            return  $this->respon( $e->getMessage() ? $e->getMessage() : '', 
            $e->getCode() && $e->getCode() > 1 ? $e->getCode() : 500);
        }
    }
}