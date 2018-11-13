<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class configuration extends Model
{
      protected $table ="configuration";

    protected $fillable= ['configuration_code','update_cycle','json'];
	public $timestamps= false;

	 public function arduino(){
		return $this->belongTo('App\arduino');
}

}
