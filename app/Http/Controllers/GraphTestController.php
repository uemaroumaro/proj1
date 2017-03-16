<?php namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\MongoDoc\TUser;
use App\MongoDoc\DataTest;
class GraphTestController extends Controller
{
    public function getIndex()
    {
        return view('graphtest/index');
    }
     public function getJson()
    {
         
         $data_test = DataTest::orderBy('datetime', 'asc')->take(10)->get();
         $labels=array();
         $data=array();
         foreach ($data_test as $val){
             array_push($labels,$val["datetime"]);
             array_push($data,$val["decimal"]);
         }
         $barChartData = [
                'labels'=> $labels,
                'datasets'=>[ [
                        'type'=>'bar',
                        'label'=>'data_line',
                        'data'=> $data,
                        'borderColor'=>"rgba(254,97,132,0.8)",
                        'backgroundColor'=>"rgba(254,97,132,0.5)"
                    ],
                    [
                        'type'=>'line',
                        'label'=> 'sample-bar',
                        'data'=> ['0.3', '0.1', '0.1', '0.3', '0.4', '0.2', '0.0',
                            '0.2', '0.3', '0.11', '0.5', '0.2', '0.5', '0.4',
                            '0.0', '0.3', '0.7', '0.3', '0.6', '0.4', '0.9',
                            '0.7', '0.4', '0.8', '0.7', '0.4', '0.7', '0.8'
                        ],
                        'borderColor'=> "rgba(54,164,235,0.8)",
                        'backgroundColor'=> "rgba(54,164,235,0.5)",
                    ]]
                ];
        return response()->json($barChartData);
    }
    
}