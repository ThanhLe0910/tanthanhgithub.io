<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResetPasswordModel extends Model
{
    public $table = 'password_resets';
    protected $fillable = [
        'email','token','created_at'
    ];
}
