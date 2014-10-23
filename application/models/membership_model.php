<?php
/**
* 
*/
class Membership_model extends CI_Model
{
	
	function validate()
	{
	$this->db->where('username',$this->input->post('username'));
	$this->db->where('password',md5($this->input->post('password')));
	$this->db->where('type','user');
	$query=$this->db->get('users');
	if($query->num_rows==1)
	{
		return true;
	}
    
	}



function create_member()
{   


   $image = null;
 $config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $config['encrypt_name']  = false;
          $config['overwrite']  = false;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{     $upload_data =  $this->upload->data();
			
			echo $upload_data['file_name'];

	$username=$this->input->post('username');
	$new_member_insert_data=array(
    'first_name'=>$this->input->post('first_name'),
    'last_name'=>$this->input->post('last_name'),
    'email'=>$this->input->post('email'),
    'username'=>$this->input->post('username'),
    'photo' =>$upload_data['file_name'],
     'password'=>md5($this->input->post('password'))
     );
$insert=$this->db->insert('users',$new_member_insert_data);
	return $insert;
	if(!$insert)
	{
		return mysql_error();
}
}

	function inserts()
{

	$new_member_insert_datax=array(
    'Full_Names'=>$this->input->post('fullName'),
    'Email_Address'=>$this->input->post('Email'),
     'Message'=>$this->input->post('message')
     

);
	$insert=$this->db->insert('Contact_inform',$new_member_insert_datax);
}

}}
?>