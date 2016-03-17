<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the view returning of the profile
*
*/
class ProfileController extends Controller
{
	public function view_user()
    {
    	if(\Auth::check()) 
    	{
      		return view('profile');
     	} 
     	else 
     	{
        	\Session::flash('status', 'Please login!');
        	return redirect('login');
     	}    	
    }
}