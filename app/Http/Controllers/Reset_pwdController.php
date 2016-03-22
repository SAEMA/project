<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*
*Reseting password or those who login using facebook
*/
class Reset_pwdController extends Controller
{
	public function reset_pwd(Request $request)
	{
		$update_pwd = User::find(\Auth:: user()->id);
		$update_pwd->password = $request->input('password');
		$update_pwd->save();
		return Redirect::to('facebook_welcome')->with('message','Password updated successfully!');
	}
}