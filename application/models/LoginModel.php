<?php
class LoginModel extends CI_Model
{
	public function checklogin($email,$password)
	{
		// query the table user  and get the result cont 
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('users');
		return $query->num_rows();
	}
	
}









?>