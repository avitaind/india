<?php

namespace App\Mail;
use App\Mail\Mailin;


class SendInMail {

	private $mailin="";
	private $send ="";
	private $url ="" ;
	private $api_key ="";

	public function __construct()
    {

    	
		$this->url ="https://api.sendinblue.com/v2.0";
		$this->api_key ="7T3v62rhFjV1UzyI";
        $this->mailin = new Mailin($this->url,$this->api_key);
    }


	function createUser($email){
		
		$data = array( "email" => $email,
			"attributes" => array("NAME"=>"", "SURNAME"=>""),
			"listid" => array(21)//,  // saving in identified contacts list
			//"listid_unlink" => array(2,5)
		);
		
		var_dump($this->mailin->create_update_user($data));
	}

	
	function getUser(){
		
		$data = array( "email" => "shreebalajiit@gmail.com" );

		echo "<pre>";
		print_r($this->mailin->get_user($data));
       
	}
	
	
	function sendMail($userId){		

			$data = array( "to" => array($userId=>"Subscriber"),
			"from" => array("namanbansal65@gmail.com","naman"),
			"replyto" => array("namanbansal65@gmail.com","naman"),
			"subject" => "Welcome",
			"text" => "Thank you for subscribing us!",
			"html" => "<h1>Dear Subscriber</h1><br/>
					   Thankyou for subscribing with us<br/>
					   <img src=\"https://www.avita.com/images/logo.png\" alt=\"image1\" border=\"0\"><br/>
					   Some text<br/>",
			"attachment" => array(),
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag")
			 );

			var_dump($this->mailin->send_email($data));
	
	}
}


?>
