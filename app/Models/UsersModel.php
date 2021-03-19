<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    public $table = 'users';
    protected $fillable = [
        'id','name','email','email_verified_at','password','remember_token','company','position','phone','avatar','scancode','url_fb','url_zalo','url_ins','url_sky','image_background','status','created_at','updated_at'
    ];
}