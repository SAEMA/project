<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Capital;
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
*Class that handles the thunderbird mail access
*It also returns the view
*/
class My_ThunderController extends Controller
{

    public function get_mails()
    {
    	$mbox = imap_open("{email.mindfiresolutions.com:143}INBOX", "saema.miftah@mindfiresolutions.com", "1mfmail2016#")
     		or die("can't connect: " . imap_last_error());

		$MC = imap_check($mbox);

		$count = 0;
		$count_total = $MC->Nmsgs;
		$last_page = $count_total % 10;
		$number_of_pages = ($count_total-$last_page)/10;

		// Fetch an overview for all messages in INBOX
		$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
		

		$i = $count_total;
		$my_array = array();

$str = "";
	foreach ($result as $overview) 
	{

		if ($overview->seen != 1)
		{	
			$str .= "<strong>";
			$str .= "<tr>";
			//$count ++;
		    $str .= "<td>[{$overview->msgno}] ({$overview->date}) </td>";
		    $str .= "<td> - </td>"; 
		    $str .= "<td>From: {$overview->from} --- {$overview->subject}</td>";
		    $str .= "<td>unseen</td>";
		    $str .= "</strong>";
		    $str .= "</tr>";
		    // $my_array[$i] = $str;
		    // $i--;
		    // $str = "";
		}
		else
		{
			$str .= "<tr>";
			//$count ++;
		    $str .= "<td>[{$overview->msgno}] ({$overview->date}) </td>";
		    $str .= "<td> - </td>"; 
		    $str .= "<td>From: {$overview->from} --- {$overview->subject}</td>";
		    $str .= "<td>seen</td>";
		    $str .= "</tr>";
		    // $my_array[$i] = $str;
		    // $i--;
		    // $str = "";
		}
	}
 	    return view('my_thunder_email')
 	     ->with('count', $count_total )
 	     ->with('email', $str);
 	     

    }
}