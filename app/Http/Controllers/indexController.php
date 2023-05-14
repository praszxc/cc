<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sebaranpendidikan;
use App\Models\sebaranpekerjaan;
use App\Models\profilpenduduk;
use App\Models\penghasilan;

class indexController extends Controller
{
    function show(){
        $datapekerjaan = sebaranpekerjaan::all();
        return view('dashboard.index',['sebaranpekerjaan'=>$datapekerjaan]);
        $datapendidikan = sebaranpendidikan::all();
        return view('dashboard.index',['sebaranpendidikan'=>$datapendidikan]);
        $datapenghasilan = penghasilan::all();
        return view('dashboard.index',['penghasilan'=>$datapenghasilan]);
        $dataprofilpenduduk = profilpenduduk::all();
        return view('dashboard.index',['profilpenduduk'=>$dataprofilpenduduk]);
    }
}
