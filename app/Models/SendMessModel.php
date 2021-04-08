<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendMessModel extends Model
{
    public $table = 'send_mess';
    protected $fillable = [
        'id','email','content','user_id','created_at','updated_at'
    ];
}
