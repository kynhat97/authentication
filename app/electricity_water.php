<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electricity_Water extends Model
{
     protected $table ="Electricity_Water";


   protected $fillable= ['ew_code','room_code','number_electricty','number_water','date_of_print'];
   public $timestamps= false;

 
	public function electricity_water(){
	return $this->belongTo('App\room');
}
}
