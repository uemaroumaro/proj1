<?php namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\MongoDoc\TUser;
use App\MongoDoc\DataTest;
use App\MongoDoc\ElectricData;
class GraphTestController extends Controller
{
    public function getIndex()
    {
        return view('graphtest/index');
    }
     public function getJson()
    {
         $data_test = ElectricData::orderBy('datetime', 'desc')->take(20)->get();
         //$data_test = ElectricData::get();
         $labels=array();
         $data=array();
         foreach ($data_test as $val){
             array_push($labels,$val["datetime"]);
             array_push($data,$val["current_val1"]);
         }
         
         $barChartData = [
                'labels'=> $labels,
                'datasets'=>[ [
                        'type'=>'bar',
                        'label'=>'data_line',
                        'data'=> $data,
                        'borderColor'=>"rgba(254,97,132,0.8)",
                        'backgroundColor'=>"rgba(254,97,132,0.5)"
                    ]]
                ];
        return response()->json($barChartData);
    }
    
}