<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class team extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	//	$this->load->library('session');
	     
	   
	}
	
	
	public function index()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/our_team.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


}//end of class