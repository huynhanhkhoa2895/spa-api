<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Banner as Model;
class Banner extends Controller
{
    //
    function getList(Request $rq){
        $data = Model::where("spa",$rq->spa)->get();
        return response()->json($data);
    }
}
