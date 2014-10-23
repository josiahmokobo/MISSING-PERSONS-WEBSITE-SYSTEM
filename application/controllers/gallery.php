<?php
class Gallery extends CI_Controller
{
public function login_validation()
{

}
public function index()

{    
$this->load->model('Gallery_model');

  if($this->input->post('upload'))
{

$this->Gallery_model->do_upload();

}
   $this->load->view('templates/header');
	//$this->load->view('galley');	
	
  
    $this->load->view('login');	  
$this->load->view('templates/footer');
}

}
?>
