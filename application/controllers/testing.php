<?php
class Testing extends CI_Controller {

	
	public function index() 
	{
		$this->load->view('testing');
		
	}
	
	public function testing_insert()
	{
		
		$datareg=array(
		'course_name'=>$this->input->post('coursename'),
		'category'=>$this->input->post('category'),
		'dept'=>$this->input->post('deptment'));
		
		$this->load->model('Test_model');
		$this->Test_model->insert_data($datareg);
		
	}
}