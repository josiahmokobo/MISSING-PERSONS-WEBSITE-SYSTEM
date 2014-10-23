<?php
class Index extends CI_Controller
{   
	function load(){
	$this->load->view('templates/header');
	$this->load->view('index');
    $this->load->view('templates/footer');
}
}
?>