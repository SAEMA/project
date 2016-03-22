<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    public $timestamps = false; 
    
    protected $fillable = ['name', 'email', 'avatar', 'password', 'activation'];

    //since not providing update time etc hence set it to false
    public function setPasswordAttribute($pass)
    {
    	$this->attributes['password'] = bcrypt($pass);
    }
}

