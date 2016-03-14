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
*Class that handles the registration , validation and insertion of data
*It also returns the view
*/
class RegistrationController extends Controller
{
    #
    #Function that returns the view of profile 
    #
	public function return_view()
    {
    	return view('registration_form');
    }

    #
    #Function that validates the user data and passes it for insertion
    #
    public function insert_data(Request $request)
    {
    	$rules = array(
            'name' => 'bail|required|alpha_num|unique:users,name',
            'password' => 'bail|required|max:6',
            // 'fname' => 'bail|required|alpha',
            // 'mname' => 'bail|alpha',
            // 'lname' => 'bail|required|alpha',
            // 'options' => 'bail|required',
            // 'maritalstatus' => 'bail|required',
            // 'dob' => 'bail|required|date',
            // 'employment' => 'bail|required',
            // 'employer' => 'bail|alpha|required_if:employment,=="employed"',
            // 'phonenumber' => 'bail|required|numeric|digits:10',
            // 'street' => 'bail|required|alpha_dash',
            // 'state' => 'bail|required|alpha',
            // 'city' => 'bail|required|alpha',
            // 'zipp' => 'bail|required|numeric',
            // 'mobilenumber' => 'bail|required|numeric|digits:10',
            // 'landlinenumber' => 'bail|required|numeric|digits:10',
            // 'fax' => 'bail|required|numeric',
            'email' => 'bail|required|email|unique:users,email',
            'retypepassword' => 'bail|required_if:password,NOT NULL|same:password',
    	);
 
        $validator = Validator::make(Input::all(), $rules);

        #-------- if the validator fails, redirect back to the form
        if ($validator->fails()) 
        {
            return Redirect::back()
                ->withErrors($validator) 
                ->withInput();
        } 
        else 
        {
	    	$insert_data = new User;
            
            $confirmation_code = str_random(30);
	   
	    	$insert_data->name = $request->input('name');
	    	$insert_data->password = $request->input('password');
	    	$insert_data->fname = $request->input('fname');
	    	$insert_data->mname = $request->input('mname');
	    	$insert_data->lname = $request->input('lname');
	    	$insert_data->options = $request->input('options');
	    	$insert_data->maritalstatus = $request->input('maritalstatus');
	    	$insert_data->dob = $request->input('dob');
	    	$insert_data->employment = $request->input('employment');
	    	$insert_data->employer = $request->input('employer');
	    	$insert_data->phonenumber = $request->input('phonenumber');
	    	$insert_data->street = $request->input('street');
	    	$insert_data->city = $request->input('city');
	    	$insert_data->state = $request->input('state');
	    	$insert_data->zipp = $request->input('zipp');
	    	$insert_data->mobilenumber = $request->input('mobilenumber');
	    	$insert_data->landlinenumber = $request->input('landlinenumber');
	    	$insert_data->fax = $request->input('fax');
	    	$insert_data->email = $request->input('email');
	    	$insert_data->yo = $request->input('yo');
            $insert_data->confirmation_code = $confirmation_code;

	    	if ($request->file('fileToUpload'))
       		 {
	            $image_temp_name = $request->file('fileToUpload')->getPathname();
	            $image_name = $request->file('fileToUpload')->getClientOriginalName();
	            $path = base_path() . '/public/img/';
	            $request->file('fileToUpload')->move($path , $image_name);
	            $insert_data->fileToUpload = $image_name;
        	}
	        else
	        {
	            $insert_data->fileToUpload = '';
	        }

            $user = new User;
            $name = Input::get('name');
	    	#--------save data in database
	        $data = array('key' => $confirmation_code, 'name' => $name);
           
            \Mail::send('email_verify', $data, function($message) use($confirmation_code){
            $message->to(Input::get('email'), Input::get('name'))
                ->subject('Verify your email address');
            });

                $insert_data->save();

	    	return Redirect::to('/login')->withInput()->with('status', 'Please check your mail!'); 
   	 	}
	}

    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            //throw new InvalidConfirmationCodeException;
        }

        $user->activation = 1;
        $user->confirmation_code = null;
        $user->save();

        \Session::flash('status', 'You have been successfully verified!');
            return redirect('login');
    }
    
}
