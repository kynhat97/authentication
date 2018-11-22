<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        protected $table ="customer";

   

   protected $fillable= ['customer_code','customer_name','customer_address','phone_number','username','gender','date_of_brith','date_of_rent','room_code','identification_card'];
   public $timestamps= false;

   public function room(){
		return $this->belongTo('App\room');
}
    public function bill(){
		return $this->hasOne('App\bill');
} 
	public function account(){
		return $this->hasOne('App\account');
}
  

}
