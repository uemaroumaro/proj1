<?php namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\MongoDoc\TUser;
use App\MongoDoc\DataTest;
class MongoTestController extends Controller
{
    public function getIndex()
    {
        $data_test = DataTest::get();
        //$users = TUser::all();
        return view('mongotest/index',['data_test' => $data_test]);
    }
    
}