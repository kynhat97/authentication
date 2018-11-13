<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class electricity_water extends Model
{
     protected $table ="electricity_water";


   protected $fillable= ['ew_code','room_code','number_electricty','number_water','date_of_print'];
   public $timestamps= false;

 
	public function electricity_water(){
	return $this->belongTo('App\room');
}
}
