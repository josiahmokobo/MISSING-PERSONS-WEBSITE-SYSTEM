<?php
/**
* 
*/
class Admin extends CI_Controller
{
	
public	function index()
	{	$this->session->set_userdata('username','mojo');
	$this->session->set_userdata('user_email','mojo@gmail.com');
	$this->session->set_userdata('login_attempt','3');
print_r($this->session->all_userdata());
	if(!$this->session->userdata('username'))
	{
		echo "you are not logged in to view the admin page";
	}
	else
	{
		echo "<p>welcome to admin page</p>";
	}
	}
}
	?>