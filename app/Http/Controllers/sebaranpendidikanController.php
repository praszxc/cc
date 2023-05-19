<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sebaranpendidikan;
class sebaranpendidikanController extends Controller
{
    //
    function show(){
        $datapendidikan = sebaranpendidikan::paginate(10);
        return view('dashboard.pendidikan',[
            "title" => "pendidikan",
            'sebaranpendidikan'=>$datapendidikan
        ]);
    }
}
