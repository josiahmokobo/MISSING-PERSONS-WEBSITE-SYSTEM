<?php
/**
* 
*/
class Val extends CI_Controller
{
	
public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create a news item';

	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === true)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('news/create');
		$this->load->view('templates/footer');

	}
	else
	{
		$this->news_model->set_news();
		$this->load->view('news/success');
	}
}
public function set_news()
{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text')
	);

	return $this->db->insert('news', $data);
}
}

?>