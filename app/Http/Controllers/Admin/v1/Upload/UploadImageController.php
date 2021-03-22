<?php

namespace App\Http\Controllers\Admin\v1\Upload;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function indexAction(Request $request)
    {
        try {
            if(!$request->hasFile('avatar')) {
                return response()->json(['upload_file_not_found'], 400);
            }
            $file = $request->file('avatar');
            if(!$file->isValid()) {
                return response()->json(['invalid_file_upload'], 400);
            }
            $path = public_path() . '/uploads/images/store/';
            $file->move($path, $file->getClientOriginalName());
            return response()->json(compact('path'));
        } catch (Exception $e) {
            return  $this->respon( $e->getMessage() ? $e->getMessage() : '', 
            $e->getCode() && $e->getCode() > 1 ? $e->getCode() : 500);
        }
    }
}