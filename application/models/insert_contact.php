	<?php
	class Insert_contact  extends CI_Model
{
	function index()
{

	$new_member_insert_data=array(
    'Full_Names'=>$this->input->post('full_name'),
    'Email_Address'=>$this->input->post('email'),
     'Message'=>$this->input->post('message')
     

);
	$insert=$this->db->insert('Contact_inform',$new_member_insert_data);
	return $insert;
	if(!$insert)
	{
		return mysql_error();
}
}

	function insertme()
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
			//$upload_data =  $this->upload->data();
      $new_member_insert_data=array(   
    'firstname'=>$this->input->post('first_name'),
     'lastname'=>$this->input->post('last_name'),
     'Ldate'=>$this->input->post('TLastSeen'),
    'place'=>$this->input->post('PLastSeen'),
     'complexion'=>$this->input->post('complexion'),
     'nationality'=>$this->input->post('nationality'),
    'contact'=>$this->input->post('contact'),
    'photo'=>$upload_data['file_name'],
     'language'=>$this->input->post('language')
         

);

	$insert=$this->db->insert('missing_person',$new_member_insert_data);
	return $insert;
	if(!$insert)
	{
		return mysql_error();
}
}
}}
?>