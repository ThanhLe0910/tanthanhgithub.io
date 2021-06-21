<?php

namespace App\Http\Controllers\Admin\v1\Address;

use App\Http\Controllers\Controller;
use App\Models\DistrictsModel;
use App\Models\WardsModel;
use App\Models\ProvincesModel;

class GetAddressController extends Controller
{
    public function indexAction()
    {
        $provinces = ProvincesModel::all();
        return view('admin.v1.address.address',array(
            'provinces'=>$provinces
        ));
    }
}