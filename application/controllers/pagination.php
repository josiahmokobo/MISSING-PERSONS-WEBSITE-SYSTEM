<?php
class Pagination extends CI_Controller
{
function index()
{

$this->load->library('pagination');
$conf['base_url']="http://localhost/CI/index.php/pagination/index/";
$config['per_page']=3;
$config['num_links']=3;
$config['total_rows']=$this->db->get('news')->num_rows();
echo $config['total_rows'];
$config['use_page_numbers'] = TRUE;
$config['page_query_string'] = TRUE;
 $config['enable_query_strings']=true;
 $config['full_tag_open'] = '<p align=/"center/">';
 $config['full_tag_open'] = '</p>';
$this->pagination->initialize($config);
$data['query']=$this->db->get('news',$config['per_page'],$this->uri->segment(3));
$this->load->view('missing',$data);
echo $this->pagination->create_links();

}

}
?>
    