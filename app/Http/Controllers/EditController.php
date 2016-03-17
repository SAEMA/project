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
*Class that handles the edditing the user profile
*It also returns the view
*/
class EditController extends Controller
{
    #
    #Function that returns the view of the edit page
    #
	public function return_view()
    {
        if (\Auth::check()) 
        {
            $db_value = \Auth::user();

            return response()->view('edit', $db_value);
        }
        else
        {
            return redirect('login')->with('status', 'Please login!');
        }
    }

    #
    #Function that updates the data of the particular user
    #
    public function update_data(Request $request)
    {
    	$this->validate($request , [
            'name' => 'bail|required|alpha_num',            
            'fname' => 'bail|required|alpha',
            'mname' => 'bail|alpha',
            'lname' => 'bail|required|alpha',
            'maritalstatus' => 'bail|required',
            'dob' => 'bail|required|date',
            'employment' => 'bail|required',
            'employer' => 'bail|alpha|required_if:employment,=="employed"',
            'phonenumber' => 'bail|required|numeric|digits:10',
            'street' => 'bail|required|alpha_dash',
            'state' => 'bail|required|alpha',
            'city' => 'bail|required|alpha',
            'zipp' => 'bail|required|numeric',
            'mobilenumber' => 'bail|required|numeric|digits:10',
            'landlinenumber' => 'bail|required|numeric|digits:10',
            'fax' => 'bail|required|numeric',
            'email' => 'bail|required|email',
    	]);
              
        $update_data = User::find(\Auth:: user()->id); 

        $update_data->name = $request->input('name');
        $update_data->fname = $request->input('fname');
        $update_data->mname = $request->input('mname');
        $update_data->lname = $request->input('lname');
        $update_data->maritalstatus = $request->input('maritalstatus');
        $update_data->dob = $request->input('dob');
        $update_data->employment = $request->input('employment');
        $update_data->employer = $request->input('employer');
        $update_data->phonenumber = $request->input('phonenumber');
        $update_data->street = $request->input('street');
        $update_data->city = $request->input('city');
        $update_data->state = $request->input('state');
        $update_data->zipp = $request->input('zipp');
        $update_data->mobilenumber = $request->input('mobilenumber');
        $update_data->landlinenumber = $request->input('landlinenumber');
        $update_data->fax = $request->input('fax');
        $update_data->email = $request->input('email');
        $update_data->yo = $request->input('yo');

        if ($request->file('fileToUpload'))
        {
            $image_temp_name = $request->file('fileToUpload')->getPathname();
            $image_name = $request->file('fileToUpload')->getClientOriginalName();
            $path = base_path() . '/public/img/';
            $request->file('fileToUpload')->move($path , $image_name);
            $update_data->fileToUpload = $image_name;
        }

        $update_data->save();

        return Redirect::to('profile')->with('message','User updated successfully!');       
    }

}