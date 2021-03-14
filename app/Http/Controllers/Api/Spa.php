<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Spa as Model;
class Spa extends Controller
{
    //
    function get(Request $rq){
        return response()->json(Model::where("id",$rq->spa)->first());
    }
}
