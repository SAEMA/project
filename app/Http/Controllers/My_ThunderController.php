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

		$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
		
		$msg = array();
		$i = 0;
		foreach ($result as $overview) 
		{
			$message = imap_fetchbody($mbox,$overview->msgno,1.1);
		 	$msg[$i] = $message;
		 	$i++;
		}

		krsort($result);

 	    return view('my_thunder_email')
 	     ->with('number', $number_of_pages)
 	     ->with('mail_body', $msg)
 	     ->with('result', $result);

    }
}