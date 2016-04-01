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
		//dd($this->result);
		//$this->msg = array();
		$i = 0;
		foreach ($this->result as $overview) 
		{
			$message = imap_fetchbody( $mbox,$overview->msgno, 1.1 );
		 	$this->msg[$i] = $message;
		 	$i++;
		 	\Cache::put( $overview->msgno, $overview->subject, 5 );
		}
		
		// if (\Cache::has(23))
		// {
		// 	dd("yes");	
		// }

		krsort($this->result);
		// \Session::put('value', $this->result);

		// print_r( \Session::get('value'));
		// exit;
		$str[0] = 'success';
		$result_json = array();
		// $returnHTML = view('job.userjobs')->with('userjobs', $userjobs)->render();
		// return response()->json(array('success' => true, 'html'=>$returnHTML));
		$result_json['val'] = $this->result;
		//$this->result;
		return response()->json( $result_json );

		//return response()->json($str);
    }

    public function show_mails(Request $request)
    {
    	//echo "checking_saema";
    	$temp = $request->saema;

    	//echo $temp;

    	///echo $request->datas;
    	$rs = json_decode($request->datas);
    	//echo "<pre>";
    	//print_r( $rs );

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

    	$my_page = view('my_thunder_email')
 	     ->with('from', $from)
 	     ->with('subject', $subject)
 	     ->with('date', $date)
 	     ->with('seen', $seen)
 	     ->with('msgno', $msgno);

		$arr = array();
		$arr['page'] = $my_page;
		//$data = array('status' => 'ok', 'url' => $redirect_url ); 
		return $my_page;
    }

}