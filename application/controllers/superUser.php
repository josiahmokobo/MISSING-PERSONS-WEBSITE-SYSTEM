<?php
/**
* 
*/
class SuperUser extends CI_Controller
{
	
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('deleteUser');
		$this->load->view('templates/footer');
	}
	function delete()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
       		if ($this->form_validation->run() == FALSE)
		{
			echo "error";
		}
		else
		{    $data='data successfully added';
			$this->load->view('templates/header');
			$this->load->view('SuperUser',$data);
			$this->load->view('templates/footer');
		}
	}
	function search()
	{
		echo "search here now ";
	}
}
?>