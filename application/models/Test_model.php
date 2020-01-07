<?php
class Test_model extends CI_Model {
	
	public function insert_data($datareg)
	{
		
		$result=$this->db->insert('course',$datareg);
	}
	
}