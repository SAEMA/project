<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Roles;
use App\Resources;
use App\Operations;
use App\Privileges;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the assignment of privileges using ajax call
*It also returns the view
*/
class PrivilegeController extends Controller
{
	#
	#Function that returns the view privileges 
	#
	public function return_view()
    {
    	if (\Auth::check()) 
    	{
      		return \View::make('privilege_for_each')
    		->with('roles_present' , Roles::all());
     	} 
     	else 
     	{
        	\Session::flash('status', 'Please login!');
        	return redirect('login');
     	}    	
    }
    #
	#Function that returns the data for the privilege 
	#
    public function send_data(Request $request)
    {
    	#----------- get the role name 
    	$arr = array();
    	$arr['role_name'] = $request->selected;

    	#----------- fetch the id of that role
    	$id = Roles::where('type',$arr['role_name'])->first();
   	
    	#---------- fetch the operations and id of the operations 
    	$operations = Operations::all()->sort();
    	
    	#----------  fetch resources and id of resources
    	$resources = Resources::all();
    	
    	#---------- for counting the number of rows that match the condition
    	$count = Privileges::where('rolesid',$id->id)->count();
    	
    	#---------- fetching data upto count
    	$privileges = Privileges::where('rolesid', $id->id)->take($count)->get();
    	
    	$str = "<div class = 'table'>" ;

    	#----------  now loop that consists of other loops
    	#----------  it loops around the number of resources
    	foreach ($resources AS $resource_info)
		{	
			$i = 0;
			$str .= "<div class='row'>";
			$str .= "<br>"."<div class='col-lg-4 '>";
			$str .= $resource_info->name . ":---->";
			$str .= "</div>";
			$oper_info = array();
			
			if ( ! empty($privileges))
			{	
				#--------to decide how many privileges will be there for a particular resource
				foreach ($privileges AS $priv_info)
		 		{
		 			if ($priv_info->resourceid == $resource_info->id)
		 			{
		 				$oper_info[$i] = $priv_info->operationid;
		 				$i++;
		 			}
		 		}
		 		sort($oper_info);
		 		$number_of_actions = 0;
		 		$count_array = count($oper_info);		 		
		 		$a = array();
		 		#------------it is necessary to check for non empty values
		 		if ( ! empty($oper_info))
		 		{
		 			foreach ($operations AS $key => $value)
					{		
						$str .= "<div class='col-lg-2 '>";					
						if (($number_of_actions < $count_array) && ($value->id == $oper_info[$number_of_actions] ))
						{									
							$str .= $value->actions ." : " . ' <input type="checkbox" '. 'onchange="my_dynamic_function(this.checked, ' . $id->id   .','. $resource_info->id .', '. $value->id .')" '.' name="option" value="" checked = "checked" >-----';
							if ($number_of_actions < $count_array) 
							{
								$number_of_actions++;
							}						
						}						
						else
						{
							$str .= $value->actions . " : " . ' <input type="checkbox" ' . 'onchange="my_dynamic_function(this.checked, ' . $id->id  .','. $resource_info->id .', '.$value->id .')" '.' name="option" value="" >-----';			
						}
						$str .= "</div>";
					}
				}
				else
				{
					foreach ($operations AS $key => $value)
					{
						$str .= "<div class='col-lg-2 '>";	
						$str .= $value->actions . " : " . ' <input type="checkbox" ' . 'onchange="my_dynamic_function(this.checked, ' . $id->id .','. $resource_info->id .', '.$value->id .')" '.' name="option" value="" >-----';	
						$str .= "</div>";	
					}	
				}				
			}
			$str .= "<br>";	
			$str .= "</div>";	
		}
    	$str .= '</div>';
    	return response()->json($str);
	}
	#
	#Function that updates the data for the privilege 
	#
	public function update_data(Request $request)
    {
    	$checked = $request->checked;
		$role = $request->role;
		$resource_info = $request->resource_info;
		$action_id = $request->action_id;

		if ($checked == 'true')
		{
			$data = new Privileges;
			$data->rolesid = $role;
			$data->resourceid = $resource_info;
			$data->operationid = $action_id;
			$data->save();

		}
		else
		{
			$delete_row = Privileges::where('rolesid', $role)
			->where('resourceid' , $resource_info)
			->where('operationid' , $action_id)
			->delete();
		}
		
		$str = array();
		$str ['u'] = "success";
		
		return response()->json($str);
    }

}