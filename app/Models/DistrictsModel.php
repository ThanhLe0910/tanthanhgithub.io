<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ProvincesModel;

use App\Models\WardsModel;

class DistrictsModel extends Model
{
    public $table = 'districts';
    protected $fillable = [
        'id','name','gso_id','province_id','created_at','updated_at'
    ];
}
