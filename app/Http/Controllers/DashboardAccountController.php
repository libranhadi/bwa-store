<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAccountController extends Controller
{
    
      public function settings()
    {   
        $user = Auth::user();
        $category = Category::all();
        return view("pages.dashboard-settings" , [
            'user' => $user,
            'category' => $category
        ]);
    }
    public function update(Request $request, $redirect){
        $attr=$request->all();
        $data =Auth::user();
        $data->update($attr);
        return redirect()->route($redirect);
    }
    public function account()
    {
            $user =Auth::user();
        return view("pages.dashboard-account", [
                     'user' => $user,
        ]);
    }
}
