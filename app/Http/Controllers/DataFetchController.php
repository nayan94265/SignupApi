<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataFetchController extends Controller
{
    function fetch(){
        
    $datamain = DB::select("SELECT * FROM users");
    return view('data',['userdata'=>$datamain]);
    }
}
