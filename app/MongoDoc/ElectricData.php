<?php
namespace App\MongoDoc;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ElectricData extends Eloquent {
     protected $table = 'electric_data';
}