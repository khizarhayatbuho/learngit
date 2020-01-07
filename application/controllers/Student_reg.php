<?php

class Student_reg extends CI_Controller {
	
	
	
	public function index()
	{
		
		$this->load->view('studentreg');	
	}
	public function registration(){
		
			$data=array(
			'student_name'=>$this->input->post('stdname'),
			'session'=>$this->input->post('session'),
			'class'=>$this->input->post('class'),
			'year'=>$this->input->post('yesr'),
			'registration'=>$this->input->post('regisno'),
			'roll_number'=>$this->input->post('rollno'));
					
	$this->load->model('Reg_model');
	$this->Reg_model->doulat_insert1($data);
	

	}
	
}
?>