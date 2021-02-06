<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Banner as Model;
class Banner extends Controller
{
    //
    function getList(){
        return response()->json(Model::all());
    }
}
