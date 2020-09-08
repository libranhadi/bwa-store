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
    public function account()
    {
        return view("pages.dashboard-account");
    }
    public function transaction()
    {
        return view("pages.dashboard-transaction");
    }
    public function detail()
    {
        return view("pages.dashboard-transaction-detail");
    }
}
