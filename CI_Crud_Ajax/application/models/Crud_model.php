<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_model extends CI_Model{
	public function add_data($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		 if($result){
       	return true;
       }else{
       	 return false;
       }

	}
	public function get_data($tbl){
		$result=$this->db->get($tbl)->result();
		return $result;
	}
	public function delete_data($id){
		$result=$this->db->where('user_id',$id)->delete('tbl_user');
        if($result){
        	return true;
        }else{
        	 return false;
        }
	}
	public function get_datawhere($tbl,$column,$id){
		$result=$this->db->where($column,$id)->get($tbl)->result();
		return $result;
	}
	public function edit_data($id,$data){
	 $result = $this->db->where('user_id',$id)->update('tbl_user',$data);
		return $result;
	}

}


?>
