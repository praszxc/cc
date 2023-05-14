<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sebaranpendidikan;
class sebaranpendidikanController extends Controller
{
    //
    function show(){
        //return sebaranpekerjaan::all();
        $datapendidikan = sebaranpendidikan::all();
        return view('dashboard.pendidikan',['sebaranpendidikan'=>$datapendidikan]);
    }
}
