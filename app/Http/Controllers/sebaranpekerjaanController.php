<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sebaranpekerjaan;
class sebaranpekerjaanController extends Controller
{
    //
    function show(){
        //return sebaranpekerjaan::all();
        $datapekerjaan = sebaranpekerjaan::all();
        return view('dashboard.listpekerjaan',['sebaranpekerjaan'=>$datapekerjaan]);
    }
}
