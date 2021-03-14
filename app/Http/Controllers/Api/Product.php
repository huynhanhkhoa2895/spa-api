<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product as Model;
use App\Models\Category as MCategory;

class Product extends Controller
{
    //
    function getList(Request $rq){
        $datas = Model::where("spa",$rq->spa)->get();
        $categorys = MCategory::where("spa",$rq->spa)->get();
        $productCate = [];
        foreach($categorys as $cate){
            $productCate[$cate->name] = [];
            foreach($datas as $data){
                if($data->category === $cate->id){
                    array_push($productCate[$cate->name],$data);
                }
            }
            
        }
        return response()->json(["product" => $productCate,"category" => $categorys]);
    }
}
