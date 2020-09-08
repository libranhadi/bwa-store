<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("pages.dashboard");
    }
    public function product()
    {
        return view("pages.dashboard-product");
    }
    public function settings()
    {
        return view("pages.dashboard-settings");
    }
}
