<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table ="bill";

 	protected $fillable= ['bill_code','customer_code','total_electricity','total_water','date_of_print'];
   public $timestamps= false;

   public function customer(){
		return $this->belongTo('App\customer');
} 
}
