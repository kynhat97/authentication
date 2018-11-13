<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table ="room";

   protected $fillable= ['room_code','configuration_code','roome_name','room_rate'];
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
