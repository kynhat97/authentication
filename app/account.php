<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
      protected $table ="account";

    protected $fillable= ['username','pass_word','account_type'];
	public $timestamps= false;

	public function customer(){
		return $this->hasOne('App\customer');
}

}
