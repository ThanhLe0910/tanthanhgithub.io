<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DistrictsModel;

class WardsModel extends Model
{
    public $table = 'wards';
    protected $fillable = [
        'id','name','gso_id','district_id','created_at','updated_at'
    ];
}
