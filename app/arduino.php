<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arduino extends Model
{
    protected $table ="arduino";

    protected $fillable= ['arduino_code','configuration_code'];
	public $timestamps= false;

	public function configuration(){
		return $this->hasOne('App\configuration');
}
public function room(){
		return $this->hasOne('App\room');
}

}
