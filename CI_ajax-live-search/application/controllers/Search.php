<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Ci_Controller{

    public function index(){
        $this->load->model('Common_model');
        $data['users']=$this->Common_model->import('authors');

        $this->load->view('display.php',$data);


    }

    public function search_user(){
      
   
        $s = $this->input->post('searchvalue');
        $this->load->model('Common_model');
        $data['users']=$this->Common_model->import_search('authors',$s);
    
        $this->load->view('display1.php',$data);
       }




}