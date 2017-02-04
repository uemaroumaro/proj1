<?php namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\MongoDoc\TUser;
class MongotestController extends Controller
{
    public function getIndex()
    {
         $users = TUser::all();
        return view('mongotest/index',['users' => $users]);
    }
    
}