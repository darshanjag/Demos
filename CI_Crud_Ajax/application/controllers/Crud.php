<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('crud_model');

	}
	public function index(){
		if($this->input->post()){
    //  print_r($this->input->post());die;
		  $data=$this->input->post();

			$result = $this->crud_model->add_data('tbl_user',$data);

			if($result){
				echo 'success';
			}
			else{
				echo "failed";
			}
		}
		else{
			$this->load->view('insert_form');
		}
	}
	public function show(){
		 $data['user']= $this->crud_model->get_data('tbl_user');
		$this->load->view('show',$data);
	}
	public function delete_data($id){
		// print_r($id);die;
	$result=$this->crud_model->delete_data($id);
		if($result){
						echo "success";

		}else{
					echo "failed";
		}

	}

	public function edit_data($id){
		if($this->input->post()){
			$data=$this->input->post();
			$result =  $this->crud_model->edit_data($id,$data);
			if($result){
				echo "success.";
			}
			else{
				echo "failed.";
			}

		}
		else{
			$data['user']= $this->crud_model->get_datawhere('tbl_user','user_id',$id);
			$this->load->view('edit_form',$data);
		}
	}


}


?>
