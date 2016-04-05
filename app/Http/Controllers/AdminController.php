<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\User;
use DB;
use App\Roles;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the jgrid section ie displays the jqgrid only if the user is admin.
*It also returns the view of the jqgrid or redirects the user(if not an admin) to the 
*profile page.
*/
class AdminController extends Controller
{
	/*
	*Function that returns the view of the jqgrid.
	*/
	public function return_view()
    {
    	return view('jqgrid');
    }

    /*
	*Function that returns the data of the jqgrid and aslo performs the searching.
	*/
    public function make_table(Request $request)
    {
    	if($request->searchField && $request->searchString)
    	{ 
    		$searchfield = $request->searchField;
   			$searchstring = $request->searchString;
    		$searchoperation = $request->searchOper;
    		
    		switch ($searchoperation)
    		{
    			case 'eq': 
            		$find_match = DB::table('users')->where($searchfield, $searchstring)->get();
            		break;

       			case 'ne':
            		$find_match = DB::table('users')->where($searchfield, "!=", $searchstring)->get();
            		break;

        		case 'bw':
            		$find_match = DB::table('users')->where($searchfield, "LIKE", $searchstring)->get();
            		break;

        		case 'bn':
            		$find_match = DB::table('users')->where($searchfield, "NOT LIKE", $searchstring)->get();
            		break;

        		case 'ew':
            		$condition = "{$searchfield}";
          		  	break;

        		case 'en':
            		$condition = "{$searchfield} ";
           			break;                
        
        		case 'cn':
           		 	$condition = "{$searchfield} ";
           			break;                
        
        		case 'nc':
           	 		$condition = "{$searchfield}";
            		break;                
                        
        		case 'nu':
            		$condition = "{$searchfield} ";
            		break;                
        
       			case 'nn':
            		$condition = "{$searchfield} ";
           		 	break;

        		case 'in':
            		$condition = "{$searchfield}";
           			 break;                     
                    
    		}

    		return response()->json($find_match);
    	}

    	return response()->json(User::all());
    }

    /*
	*Function that returns the data of the subgrid of the jqgrid.
	*/
    public function make_subgrid(Request $request)
    {
    	return response()->json(User::all());
    }

    /*
	*Function for allowing the edit and multiple as well as single delete of rows in the jqgrid. 
	*/
    public function edit_table(Request $request)
    {
    	if ($request->oper == 'del')
    	{
    		$stringid = $request->id;
    		$stringid = explode(',', $stringid);
			$i = 0;
			
            /*For counting the number of items selected to delete.*/
			foreach ($stringid as $key => $value)
			{
				$id[$i] = $value;
				$i++;
			}
			
            /*If only one item selected to delete*/
			if (1 == $i)
			{
				DB::table('users')->where('id',$id[0] )->delete();
				
                return response()->json(User::all());
			}
			else
			{
				$count = 0;
				
                while ($count < $i)
				{
					DB::table('users')->where('id',$id[$count] )->delete();
					$count++;
				}
			}
   		}
   		elseif ($request->oper == 'edit')
		{	
			$fname = $request->fname;
			$lname = $request->lname;
			$mname = $request->mname;
			$id = $request->id;
			DB::table('users')
			->where('id' , $id)
			->update(['fname' => $fname],
					['lname' => $lname],
					['mname' => $mname]
					);
		}	
    }

}