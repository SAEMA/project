<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{  
	public $timestamps = false; 
    //since not providing update time etc hence set it to false
    //protected $table = 'users';
    public function setPasswordAttribute($pass){

        $this->attributes['password'] = \Hash::make($pass);

    }
}
