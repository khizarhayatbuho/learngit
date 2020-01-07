<?php

class Welcome_Model extends CI_Model
{
	
	public function assignmentdata($data)
	{
	
		
		$result= $this->db->insert('assignment',$data);
		
	}
	
	
}