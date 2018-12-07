<?php

class Contact extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
    //completed
	public function index(){
		$this->load->view('examples/contact');
	}
}
?>