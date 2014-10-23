<?php
/**
* 
*/
class AdminS extends CI_Controller
{
	
public	function index()
	{
      $this->load->view('templates/header');
      $this->load->view('adminLogin');
      $this->load->view('templates/footer');
     }
 }
	?>