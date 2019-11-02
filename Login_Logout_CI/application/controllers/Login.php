<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->library('session');
    }


	public function index()
	{
		$this->load->view('login');
	}

	public function log_in(){
		
		$this->load->model('Common_model'); 
		$loginArray = array('username' => $this->input->post('username'),'password'=>md5($this->input->post('password')) );
	
		$result['data'] = $this->Common_model->login('login_logout',$loginArray);
		
		if(!empty($result['data'])){
			$this->session->set_userdata('userdata', $result['data'] );
			$this->load->view('welcome_page',$result);
		}else{
			$this->session->set_flashdata('error', 'error' );
			$this->load->view('login');
		}
		
		
	}
}
