<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\response;
use App\Models\Schedule as Model;
class Schedule extends Controller
{
    //
    function create(Request $rq){
        $scheduleCustomer = Model::where("customer",$rq->customer)->where("status","waiting")->first();
        if(empty($scheduleCustomer)){
            $model = new Model;
            $model->customer = $rq->customer;
            $model->service = $rq->service;
            $model->time = $rq->time;
            $model->phone_contact = $rq->phone_contact;
            $model->save();
            return response()->json(["status"=>1]);
        }else{
            return response()->json(["status"=>0]);
        }

    }
}
