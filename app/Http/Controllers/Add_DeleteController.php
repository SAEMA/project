<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Roles;
use App\Resources;
use App\Operations;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the addition and deltetion of roles, resources and operations.
*It also returns the view for the add / delete page .
*/
class Add_DeleteController extends Controller
{
	/*
	*Function that returns the view of the add and delete 
	*/
	public function return_view()
    {
		if (\Auth::check())
		{
	      	return \View::make('add_delete')
	    	->with('roles_present' , Roles::all())
	    	->with('operations_present' , Operations::all())
	    	->with('resources_present' , Resources::all());
     	} 
     	else 
     	{
        	\Session::flash('status', 'Please login!');
        	return redirect('login');
     	}
    }
    
    /*
    *Function that handles addition and deletion requests
    */
    public function add_new_or_delete(Request $request)
    {
    	/*for role addition*/
    	if ($request->addroles)
		{
			$data_to_insert = $request->newroles;
			
			DB::table('roles')->insert(
    			['type' => $data_to_insert]
			);
			
			return redirect('add_delete')->with('operation', 'Successful addition!');
		}

		/*for operation addition*/
    	elseif ($request->addoperation)
		{
			$data_to_insert = $request->newoperation;
			
			DB::table('operations')->insert(
    			['actions' => $data_to_insert]
			);
			
			\Session::flash('operation', 'Successful addition!');
			return redirect('add_delete'); 
		}

		/*for resource addition*/
    	elseif ($request->addresources)
		{
			$data_to_insert = $request->newresources;
			
			DB::table('resources')->insert(
    			['name' => $data_to_insert]
			);
			
			\Session::flash('operation', 'Successful addition!');
			return redirect('add_delete');
		}

		/*for deleting roles*/ 
    	elseif ($request->deleteroles)
		{
			$data_to_delete = $request->roles;
			
			DB::table('roles')
			->where('type',$data_to_delete )
			->delete();
			
			\Session::flash('operation', 'Successful deletion!');
			return redirect('add_delete');
		}

		/*for deleting operations*/ 
    	elseif ($request->deleteoperation)
		{
			$data_to_delete = $request->operation;

			DB::table('operations')
			->where('actions',$data_to_delete )
			->delete();
			
			\Session::flash('operation', 'Successful deletion!');
			return redirect('add_delete');
		}

		/*for deleting resources*/
    	elseif ($request->deleteresources)
		{
			$data_to_delete = $request->resources;

			DB::table('resources')
			->where('name',$data_to_delete )
			->delete();

			\Session::flash('operation', 'Successful deletion!');
			return redirect('add_delete');
		}
    }

}