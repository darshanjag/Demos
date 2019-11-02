<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function log_out(){
		
		$this->session->unset_userdata('userdata');
		$this->load->view('login');
		
		
	}
}
