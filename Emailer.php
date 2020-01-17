<?php
//http://www.bryanl.us/wdv341/emailer_class/Emailer.php
class Emailer 
{
	private $senders_address;
	private $send_to_address;
	private $subject_line;
	private $message;
	function __construct($b){
		$this->senders_address=$b;
	}
	
	function set_senders_address($sa){
		$this->senders_address=$sa;
	}
	function get_senders_address(){
		return $this->senders_address;
	}	
	
	function set_send_to_address($sta){
		$this->send_to_address=$sta;
	}
	function get_send_to_address(){
		return $this->send_to_address;
	}	
	
	function set_subject_line($sl){
		$this->subject_line=$sl;
	}
	function get_subject_line(){
		return $this->subject_line;
	}	
	
	function set_message($m){
		$this->message=$m;
	}
	function get_message(){
		return $this->message;
	}	
	
	function  sendEmail( ){
			

		return mail(
			$this->send_to_address,
			$this->subject_line,
			$this->message,
			"From: " . $this->senders_address . "\r\n"
			);
		
	}
}

?>