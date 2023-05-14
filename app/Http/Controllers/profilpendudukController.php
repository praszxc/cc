<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profilpenduduk;
class profilpendudukController extends Controller
{
    //
    function show(){
        //return sebaranpekerjaan::all();
        $dataprofilpenduduk = profilpenduduk::all();
        return view('dashboard.profilpenduduk',['profilpenduduk'=>$dataprofilpenduduk]);
    }
}
