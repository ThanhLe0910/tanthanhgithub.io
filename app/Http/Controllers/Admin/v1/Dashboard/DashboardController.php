<?php

namespace App\Http\Controllers\Admin\v1\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return view('admin.v1.dashboard.dashboard');
    }
}