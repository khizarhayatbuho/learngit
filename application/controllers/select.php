
<?php
class select extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Select_model'); // load model 
 }
 
 public function index() {
   $this->data['Select_model'] = $this->Select_model->getPosts(); // calling Post model method getPosts()
   $this->load->view('select', $this->data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>