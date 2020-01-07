<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	public function data_insert()
	{
	$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
        $this->load->library('upload', $config);
		$this->upload->do_upload('assignmentfile');
		$image = $this->upload->data();
		$file=("uploads/".$image['raw_name'].$image['file_ext']);
		
		
		$data1= array(
		'title'=>$this->input->Post('title'),
		'assignment_file'=> $file,
		'from_date'=>$this->input->Post('fromdate'),
		'to_date'=>$this->input->Post('todate'));
		$todate=$this->input->Post('todate');
		
		// convert array into json 
		$jsonencode= json_encode($data1);
		// decode json  
		$jsondecode=json_decode($jsonencode);
		// if date is expired
		if($todate >= '2019-07-12')
		{
			$data['result_msg'] = 'Date is Expired.You Can not Upload File. The Last Date Of Assignment is 12-07-2019  !';
		}
		else
		{
		$this->load->model('Welcome_Model');
		$this->Welcome_Model->assignmentdata($jsondecode);
		
		
		// if data save in database 
	if ($jsondecode == true) {
$data['result_msg'] = 'Json data successfully inserted into database !';
} else {
	// if some error occur in insertion 
$data['result_msg'] = 'Please configure your database correctly';
}
		}
		// display of success or failure message show in  view 
$this->load->view("Welcome_message",$data);
		
	
}

		
}

