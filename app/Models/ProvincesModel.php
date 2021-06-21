<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\DistrictsModel;

class ProvincesModel extends Model
{
    public $table = 'provinces';
    protected $fillable = [
        'id','name','gso_id','created_at','updated_at'
    ];
}
