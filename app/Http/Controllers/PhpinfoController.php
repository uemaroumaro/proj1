<?php namespace App\Http\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PhpinfoController extends Controller
{
    public function getIndex()
    {
        return view('phpinfo/index');
    }
    
}