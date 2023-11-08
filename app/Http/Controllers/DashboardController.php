<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardGeneral()
    {
        return view('pages.dashboard.dashboard-general-dashboard');
    }

    public function dashboardEcommerce()
    {
        return view('pages.dashboard.dashboard-ecommerce-dashboard');
    }
}
