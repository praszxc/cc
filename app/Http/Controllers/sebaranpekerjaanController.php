<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sebaranpekerjaan;
class sebaranpekerjaanController extends Controller
{
    //
    function show(){
        //return sebaranpekerjaan::all();
        $datapekerjaan = sebaranpekerjaan::paginate(10);
        return view('dashboard.listpekerjaan',[
            "title" => "pekerjaan",
            'sebaranpekerjaan'=>$datapekerjaan
        ]);
    }
}
