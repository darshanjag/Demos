<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends Ci_Model{

     function import($tbl){

     return   $result=$this->db->get($tbl)->result();

     }

     function import_search($table,$value){
      
            $this->db->select("*");
            $this->db->from("authors");
            $this->db->like('first_name', $value);
            $this->db->or_like('last_name', $value);
            $this->db->or_like('email',$value);
            $query = $this->db->get();
            return $query->result();

     }



}