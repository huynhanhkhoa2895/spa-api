<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service as Model;

class Service extends Controller
{
    //
    function getList(Request $rq){
        $data = Model::where("spa",$rq->spa)->get();
        return response()->json($data);
    }
}
