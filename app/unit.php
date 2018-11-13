<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
     protected $table ="unit";
      protected $fillable= ['electricity_payment','water_payment'];
   public $timestamps= false;

}
