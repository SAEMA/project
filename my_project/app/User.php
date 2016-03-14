<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    public $timestamps = false; 
    
    //since not providing update time etc hence set it to false
    public function setPasswordAttribute($pass){
    	$this->attributes['password'] = bcrypt($pass);
        //$this->attributes['password'] = \Hash::make($pass);

    }
}

