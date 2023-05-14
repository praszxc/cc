<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penghasilan;
class penghasilanController extends Controller
{
    //
    function show(){
        //return sebaranpekerjaan::all();
        $datapenghasilan = penghasilan::all();
        return view('dashboard.penghasilan',['penghasilan'=>$datapenghasilan]);
    }
}
