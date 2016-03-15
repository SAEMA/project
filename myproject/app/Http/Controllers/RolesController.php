<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Roles;
use App\Resources;
use App\Users;
use App\Privileges;
use App\Operations;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the user specific update of roles 
*It also returns the view
*/
class RolesController extends Controller
{
    #
    #Function that returns the view of the user specific display of roles 
    #
    public function return_view()
    {
        if(\Auth::check()) 
        {
            return \View::make('roles')
            ->with('roles' , User::all())
            ->with('roles_data' , Roles::all());
        }
        else 
        {
            \Session::flash('status', 'Please login!');
            return redirect('login');
        }
    }
    #
    #Function that handles updating the roles of the particular user
    #
    public function update_roles(Request $request)
    {  
        #acl work to check if the user is allowed to perform the updation

        #---------  extract the name of the file
        $path_parts = pathinfo($_SERVER['REQUEST_URI']);
        $resource_name = $path_parts['filename'];
      
        #--------- get the id of the role
        $resource_id = Resources::where('name', $resource_name)->first();

        #---------  get the user's privilegeid
        $user_type_id = \Auth::user()->privilegesid;

        #--------- get operationid from privileges where rolesid and resourceid match
        $get_info = array();
        $get_info = Privileges::where('rolesid' , $user_type_id)
        ->where('resourceid' , $resource_id->id)
        ->get();
               
        #---------  get id of update from operations table
        $update_id = Operations::where('actions', 'update')->first();

        #--------giving $value a default value
        $value = "";
       
        #-------- forecah loop for matching the data
        foreach ($get_info AS $info)
        {
            if ($info->operationid == $update_id->id)
            {
                $value = "yes";
            }
        }

        #--------checking if $value is empty or not
        if ($value != "")
        {
        //===========================acl completed

      		$username = $request->update;
      		$reassign = $request->reassign;

      		#-------query to get the id 
      		$type_id = DB::table('roles')
                      		->where('type', $reassign)
                      		->first();
      		
            #-------query to update the user's table for the respective user
      		DB::table('users')
                ->where('name', $username)
                ->update(['privilegesid' => $type_id->id ]);  

            return Redirect::to('roles')->with('message_for_roles','Successful update!');
        }
        else
        {
          return Redirect::to('roles')->with('message_for_roles','Extremely sorry you dont have permissions!');
        }
    }

}
