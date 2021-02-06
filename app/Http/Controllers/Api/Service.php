<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service as Model;

class Service extends Controller
{
    //
    function getList(){
        return response()->json(Model::all());
    }
}
