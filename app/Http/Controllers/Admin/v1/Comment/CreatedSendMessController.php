<?php

namespace App\Http\Controllers\Admin\v1\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SendMessModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CreatedSendMessController extends Controller
{
    public function indexAction(Request $request,$id){
        try {
            $validator = Validator::make($request->all(), [
                'content' =>'required',
            ]);
            if($validator->fails()) {
                $response = $validator->errors()->messages();
                return $this->respon($response,400);
            };
            $userId = $id;
            $emailSend = Auth::user()->email;
            $createSendMess = SendMessModel::create([
                'content'=>$request->get('content'),
                'email'=> $emailSend,
                'user_id'=> $userId,
                'created_at'=> date('Y-m-d H:i:s',time()),
                'updated_at'=> date('Y-m-d H:i:s',time()),
            ]);
            if(!isset($createSendMess->id) || $createSendMess->id < 1) {
                throw new Exeption(__("Create send email failed"),400);
            }
            return $this->respon($createSendMess,200);
        } catch (Exception $e) {
            return $this->respon($e->getMessage() ? $e->getMessage() : '',400);
        }
    }
}
