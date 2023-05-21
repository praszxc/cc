<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;
class dashboardController extends Controller
{
    //
    function show(){
        return view('dashboard.dashboard',[
            "title" => "dashboard",
        ]);
    }
}
