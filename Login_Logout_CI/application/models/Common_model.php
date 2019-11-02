<?php
class Common_model extends CI_Model{

	function __constructor()
	{
		parent::__constructor();
		$this->load->model('Common_model'); 

	}



//insert Data
	function login($table,$dataArray)
	{
		return   $this->db->get_where($table,$dataArray)->result();
		
	}

//fetch all table records




}

?>
