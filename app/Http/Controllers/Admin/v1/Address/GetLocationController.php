<?php

namespace App\Http\Controllers\Admin\v1\Address;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DistrictsModel;
use App\Models\WardsModel;
use App\Models\ProvincesModel;

class GetLocationController extends Controller
{
    public function indexAction(Request $request)
    {
        $district = DistrictsModel::where('province_id',$request->parent)->get();
        return response(['data' =>$district]);
    }
}