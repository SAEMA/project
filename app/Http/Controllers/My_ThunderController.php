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
	private $result;
	private $number_of_pages;
	private $msg = array();

	public function my_page()
	{
		return view('get_mail');
	}

    public function get_mails(Request $request)
    {
    	$mbox = imap_open("{email.mindfiresolutions.com:143}INBOX", "saema.miftah@mindfiresolutions.com", "1mfmail2016#")
     		or die("can't connect: " . imap_last_error());

		$MC = imap_check($mbox);

		$count = 0;
		$count_total = $MC->Nmsgs;
		$last_page = $count_total % 10;
		$this->number_of_pages = ($count_total-$last_page)/10;

		$this->result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}", 0);
		
		$i = 0;
		foreach ($this->result as $overview) 
		{
			$message = imap_fetchbody( $mbox,$overview->msgno, 1.1 );
		 	$this->msg[$i] = $message;
		 	$i++;
		 	\Cache::put( $overview->msgno, $overview->subject, 5 );
		}
		
		
		krsort($this->result);
		
		$str[0] = 'success';
		$result_json = array();
		
		$result_json['val'] = $this->result;
		$result_json['num'] = $this->number_of_pages;
		$result_json['total'] = $count_total;
		return response()->json( $result_json );

    }

    public function show_mails(Request $request)
    {
    	
    	//$temp = $request->saema;
    	$num = $request->num;
    	$id = $request->id;
    	$total = $request->total;
    	$rs = json_decode($request->datas);
    	
    	//store 1)from 2)subject 3)date 4)seen 5)msgno 
    	$from = array();
    	$subject = array();
    	$date = array();
    	$seen = array();
    	$msgno = array();
    	$i = 0 ;
    	foreach ( $rs AS $rrs )
    	{
    		$from[$i] = $rrs->from;
    		$subject[$i] = $rrs->subject;
    		$date[$i] = $rrs->date;
    		$seen[$i] = $rrs->seen;
    		$msgno[$i] = $rrs->msgno;    		
    		$i++;
    	}

    	return  view('my_thunder_email')
 	     ->with('from', $from)
 	     ->with('subject', $subject)
 	     ->with('date', $date)
 	     ->with('seen', $seen)
 	     ->with('msgno', $msgno)
 	     ->with('id', $id)
 	     ->with('total', $total)
 	     ->with('number', $num);
		
    }

    public function get_my_attatchments()
    {
    	$imap = imap_open("{email.mindfiresolutions.com:143}INBOX", "saema.miftah@mindfiresolutions.com", "1mfmail2016#")
     		or die("can't connect: " . imap_last_error());

		// delibertely choose a message with an attachment
		$message = 78;

		// // dump out every property of the message
		echo "<pre>\n\n";
		print_r(imap_fetchstructure($imap, $message));
		echo "\n\n</pre>";
		exit;

		$part = imap_fetchstructure($imap, $message);

		$numparts = count($part->parts);
		$attatchments = array();
		
		$partNum = "";
		
		for ( $i = 0; $i < $numparts; $i++ )
		{
			if ( isset($part->parts[$i]->disposition) )
			{
				echo "<pre>";
				echo $part->parts[$i]->disposition;
			}
			else echo "no";
		}
	}
}
		
		