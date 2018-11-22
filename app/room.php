<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table ="room";

   protected $fillable= ['room_code','configuration_code','roome_name','room_rate','arduino_code'];
   public $timestamps= false;

   
	public function electricity_water(){
		return $this->hasOne('App\electricity_water');
}

	public function customer(){
		return $this->hasOne('App\customer');
}

	public function arduino(){
			return $this->belongTo('App\arduino');
	}
}
