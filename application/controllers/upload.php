<?php

class Upload extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}
	function do_upload()
	{
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $config['encrypt_name']  = true;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$upload_data =  $this->upload->data();
			$data_ary= array(
                    'title'=>$data['client_name'],
                    'file'=>$data['filename'],
                    'width'=>$data['image_width'],
                    'height'=>$data['image_height'],
                    'type'=>$data['image_type'],
                    'size'=>$data['file_size'],
                     'data'=>time(),
				);
			$this->load->database();
			$this->db->insert('upload',$data_ary);
			$data=array('upload_data'=>$upload_data);
            $this->load->view('upload_success',$data);

		}
	}
	

}
?>