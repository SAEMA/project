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
*Class that handles the thunderbird mail access for the mindfire account. It can be used for the *gmail accounts as well ie for any web client.
*It also returns the view
*/
class My_ThunderController extends Controller
{
	private $result;
	private $number_of_pages;
	private $msg = array();

	/*
	*Function that returns the view of a button that gets the mail.In the background however
	*using ajax we are getting that mails and storing it to reduce the waiting time hence *causing minimum discomfort to the user.
	*/
	public function my_page()
	{
		return view('get_mail');
	}

	/*
	*Function that is getting mails from my mail account.This function is called through ajax as *soon as the starting page loads.
	*/
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
		
		krsort($this->result);/*This sorting does not help.Please use only rsort.*/
		
		$str[0] = 'success';
		$result_json = array();
		
		$result_json['val'] = $this->result;
		$result_json['num'] = $this->number_of_pages;
		$result_json['total'] = $count_total;
		return response()->json( $result_json );

    }

    /*
    *Function that receives the already fetched mails through ajax call earlier and sored in a *variable. The variable is processed ie loop through each and get the "from", "subject", *"seen", "date" and "msgno".
    */
    public function show_mails(Request $request)
    {
    	$num = $request->num;
    	$id = $request->id;
    	$total = $request->total;
    	$rs = json_decode($request->datas);
    	
    	/*Store 1)from 2)subject 3)date 4)seen 5)msgno.*/
    	$from = array();
    	$subject = array();
    	$date = array();
    	$seen = array();
    	$msgno = array();
    	$i = 0;
    	
    	/*Loop through and store the value in respective variables.*/
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

    	set_time_limit(3000);

    	$hostname = '{email.mindfiresolutions.com:143}INBOX';
		$username = 'saema.miftah@mindfiresolutions.com'; 
		$password = '1mfmail2016#';

		$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

		$emails = imap_search($inbox,'ALL');

		$max_emails = 16;

		$from = array();
		$subject = array();
		$date = array();
		$seen = array();
		$msgno = array();

		$x = 0;
		if ( $emails )
		{
			$count = 1;
			rsort($emails);//------------for sorting and getting the recent ones
			foreach ( $emails as $email_number ) 
    		{
    			$overview = imap_fetch_overview($inbox,$email_number,0);
    			// echo "<pre>";
    			// print_r($overview);
    			// exit;
    			$message = imap_fetchbody($inbox,$email_number,2);
    			// echo "<pre>";
    			// print_r($message);
    			$structure = imap_fetchstructure($inbox, $email_number);
    			// echo "<pre>";
    			// print_r($structure);
    			// exit;
    			echo "<br>" . $from[$x] = $overview[0]->from;
    			echo "<br>" . $subject[$x] = $overview[0]->subject;
    			echo "<br>" . $date[$x] = $overview[0]->date;
    			echo "<br>" . $seen[$x] = $overview[0]->seen;
    			echo "<br>" . $msgno[$x] = $overview[0]->msgno;
    			// echo  $overview[0]->from . "----------------from";
       //  		echo "<br>" . $overview[0]->subject . "-----------subject<br>";
    			$x++;
    			$attachments = array();

    			if ( isset($structure->parts) && count($structure->parts) ) 
        		{
            	
	            	for ( $i = 0; $i < count($structure->parts); $i++ ) 
	            	{
	                	$attachments[$i] = array(
	                    	'is_attachment' => false,
	                    	'filename' => '',
	                    	'name' => '',
	                    	'attachment' => ''
	                	);

	                	if ( $structure->parts[$i]->ifdparameters ) 
	                	{
	                    	foreach ( $structure->parts[$i]->dparameters as $object ) 
	                    	{
	                        	if ( strtolower($object->attribute) == 'filename' ) 
	                        	{
	                            	$attachments[$i]['is_attachment'] = true;
	                            	$attachments[$i]['filename'] = $object->value;
	                        	}
	                    	}
	                	}

	                	if ( $structure->parts[$i]->ifparameters ) 
	                	{
	                    	foreach ( $structure->parts[$i]->parameters as $object ) 
	                    	{
	                        	if ( strtolower($object->attribute) == 'name' ) 
	                        	{
	                            	$attachments[$i]['is_attachment'] = true;
	                            	$attachments[$i]['name'] = $object->value;
	                        	}
	                    	}
	                	}

	                	if ( $attachments[$i]['is_attachment'] ) 
	               		{
		                    $attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);
	 
	                    
	                    	if ( $structure->parts[$i]->encoding == 3 ) 
	                    	{ 
	                        	$attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
	                    	}
	                    
	                    	elseif ( $structure->parts[$i]->encoding == 4 ) 
	                    	{ 
	                        	$attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
	                    	}
	                	}

	    			}
				}

				foreach ( $attachments as $attachment )
      		    {
                	if ( $attachment['is_attachment'] == 1 )
            		{
                		echo $filename = $attachment['name']; 
                		echo "<br>";

                		$url = asset($filename);
                	//	echo "<a href='/" . $url . "'>" . $url . "</a>";

		                if ( empty($filename) )
		                {
		                	$filename = $attachment['filename'];
		 				}

		                if ( empty($filename) ) 
		                {
		                	$filename = time() . ".dat";
		 				}

		 				$fp = fopen($email_number . "-" . $filename, "w+");
                		fwrite($fp, $attachment['attachment']);
                		fclose($fp);
                		echo "<a href='/" . $email_number . "-" . $filename . "'>" . $fp . ">here</a>";
                	}
                }

                if ( $count++ >= $max_emails ) 
                {
                	break;
                }
            }
        }

        // foreach ($overview AS $look)
        // {
        // 	echo $from = $look->from;
        // 	echo "<br>" . $subject = $look->subject . "<br>";

        // }

        foreach ($attachments as $view)
        {
        	
        }
    	imap_close($inbox);
    }

}







//     	$imap = imap_open("{email.mindfiresolutions.com:143}INBOX", "saema.miftah@mindfiresolutions.com", "1mfmail2016#")
//      		or die("can't connect: " . imap_last_error());

// 		// delibertely choose a message with an attachment
// 		$message = 75;

// 		// // dump out every property of the message
// 		// echo "<pre>\n\n";
// 		// print_r(imap_fetchstructure($imap, $message));
// 		// echo "\n\n</pre>";
// 		// exit;

// 		$part = imap_fetchstructure($imap, $message);

// 		$numparts = count($part->parts);
// 		$attatchments = array();
		
// 		$partNum = "";
		
// 		for ( $i = 0; $i < $numparts; $i++ )
// 		{
// 			if ( isset($part->parts[$i]->disposition) )
// 			{
// 				echo "<pre>";
// 				echo $part->parts[$i]->disposition;
// 				echo "<br>";
// 				echo $part->parts[$i]->dparameters[0]->value;
// 			}
// 			else echo "no";
// 		}
// 	}
// 	}

// }
		
		