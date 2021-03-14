<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Agency as Model;
class Agency extends Controller
{
    //
    function getList(Request $rq){
        $data = Model::where("spa",$rq->spa)->get();
        return response()->json($data);
    }
}
