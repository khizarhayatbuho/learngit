<?php

class Reg_model extends CI_Model {
	
	public function doulat_insert1($data){ 
	
	 $result = $this->db->insert('std_reg',$data);
	 redirect("http://localhost/CodeIgniter/index.php/Student_reg/");
	 }
	
	
}
