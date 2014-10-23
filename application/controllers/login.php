<?php
session_start();
//$_SESSION["me"]="";
class Login extends CI_Controller
{  public $datax='';
   public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


	function missing(){
		if(!$this->session->userdata('username'))
	{
	$data="you have to login to view data";
	$_SESSION["me"]=$data;
    $this->load->view('templates/header');
	$this->load->view('login_form',$data);
    $this->load->view('templates/footer');}
	else
	{
	
	$this->load->library('pagination');
$this->load->library('pagination');
$config['base_url'] = 'http://localhost/CI/index.php/login/missing/';
$config['total_rows']=$this->db->get('missing_person')->num_rows();
$config['per_page'] = 3;
//$config['num_links']=;
//$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<p>';
$config['full_tag_close'] = '</p>';
$config['first_link'] = false;
$config['next_link'] = '<img src="http://localhost/CI/images/next.png"';
$config['next_tag_open'] = '<SPAN> ';
$config['next_tag_close'] = '</SPAN>';
$config['last_link'] = false;
$config['prev_link'] = '<img src="http://localhost/CI/images/previous.png"';
$config['prev_tag_open'] = '<SPAN>';
$config['prev_tag_close'] = '</SPAN>';
$config['cur_tag_open'] = '<b><font color="red">';
$config['cur_tag_close'] = '</b></font>';
$this->pagination->initialize($config);
$data['query']=$this->db->get('missing_person',$config['per_page'],$this->uri->segment(3));
	$this->load->view('templates/header', $data);
	$this->load->view('missing', $data);
    $this->load->view('templates/footer');
	}
	
	
}
function logout()
	{
		$this->session->unset_userdata('username');
		$this->load->view('templates/header');
	    $this->load->view('login_form');
        $this->load->view('templates/footer');
	}
	function home(){
	$this->load->view('templates/header');
	$this->load->view('index');
    $this->load->view('templates/footer');
}
function index(){
	$this->load->view('templates/header');
	$this->load->view('index');
    $this->load->view('templates/footer');
}
function loginform(){
	$this->load->view('templates/header');
	$this->load->view('login_form');
    $this->load->view('templates/footer');
}
function register(){
	$this->load->view('templates/header');
	$this->load->view('signup_form');
    $this->load->view('templates/footer');
}
function contact_us(){
	$this->load->view('templates/header');
	$this->load->view('Content_Contact');
    $this->load->view('templates/footer');
}

	public function view($slug)
{
	$data['news_item'] = $this->news_model->get_news($slug);

	if (empty($data['news_item']))
	{
		show_404();
	}

	$data['title'] = $data['news_item']['title'];

	$this->load->view('templates/header', $data);
	$this->load->view('news/view', $data);
	$this->load->view('templates/footer');
}
	function contact(){
   $data['message']="";

	$this->load->view('templates/header');
	$this->load->view('Content_Contact',$data);
    $this->load->view('templates/footer');
}
 function send_email()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('full_name','Full Name','trim|required');
   $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('message','Message','trim|required');

   if($this->form_validation->run()==FALSE)
   {

 $this->load->view('templates/header');
	$this->load->view('Content_Contact');
    $this->load->view('templates/footer');
   }
    if($this->form_validation->run()==true)
  {
  	 $this->load->model('insert_contact');
  	 $query=$this->insert_contact->index();
     if ($query) 
      {
	  $this->load->view('templates/header');
	$this->load->view('Contact_Success');
    $this->load->view('templates/footer');      }
   else{
   echo mysql_error();
      }

 	
  }


}
function Image()
{

$this->load->model('membership_model');
$query=$this->membership_model->Image();
if($query)
{
	echo "successfully uploaded";
}
else
{
	echo mysql_error();
}
}
function validate_Credentials()
{
$this->load->model('membership_model');
$query=$this->membership_model->validate();
if(isset($_POST["username"])){
$username =$_POST["username"];
}
if($query)
{
	$data=array(
'username'=>$this->input->post('username'),
'is_logged_in'=>true

		);
	$this->session->set_userdata($data);
	$this->session->set_userdata('username',$username);
	$this->session->set_userdata('user_email','mojo@gmail.com');
	$this->session->set_userdata('login_attempt','3');
//print_r($this->session->all_userdata());
	
	//$this->missing();

	$data['news'] = $this->news_model->get_news();
	$data['title'] = 'News archive';
	$this->load->view('templates/header', $data);
	$this->load->library('pagination');
$config['base_url'] = 'http://localhost/CI/index.php/login/missing/';
$config['total_rows']=$this->db->get('missing_person')->num_rows();
$config['per_page'] = 3;
//$config['num_links']=10;
//$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<p>';
$config['full_tag_close'] = '</p>';
$config['first_link'] = false;
$config['next_link'] = '<img src="http://localhost/CI/images/next.png"';
$config['next_tag_open'] = '<SPAN> ';
$config['next_tag_close'] = '</SPAN>';
$config['last_link'] = false;
$config['prev_link'] = '<img src="http://localhost/CI/images/previous.png"';
$config['prev_tag_open'] = '<SPAN>';
$config['prev_tag_close'] = '</SPAN>';
$config['cur_tag_open'] = '<b><font color="red">';
$config['cur_tag_close'] = '</b></font>';
$this->pagination->initialize($config);
$data['query']=$this->db->get('missing_person',$config['per_page'],$this->uri->segment(3));
$this->load->view('missing', $data);
$this->load->view('templates/footer');
$_SESSION["me"]="";
}
else
{
	$this->loginform();
    $_SESSION["me"]="wrong password";
}
}
function signup()
{
$this->load->view('templates/header');
$this->load->view('signup_form');
$this->load->view('templates/footer');

}
function create_member()
{
$this->load->library('form_validation');
$this->form_validation->set_rules('first_name','Name','trim|required');
$this->form_validation->set_rules('last_name','Last_name','trim|required');
$this->form_validation->set_rules('email','Email_Address','trim|required|valid_email|callback_check_if_email_exists');
$this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[15]|callback_check_if_username_exists');
$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
$this->form_validation->set_rules('password_confirm','Password Confirmation','trim|required|matches[password]');

if($this->form_validation->run()===FALSE)
{
$this->load->view('templates/header');
$this->load->view('signup_form');
$this->load->view('templates/footer');
}
else
{
$this->load->model('membership_model');
$query=$this->membership_model->create_member();
if($query)
{
	
	$this->load->view('templates/header');
    $this->load->view('success');
    $this->load->view('templates/footer');
    
}
else
{
	$this->load->view('templates/header');
    $this->load->view('login_form');
    $this->load->view('templates/footer');
}

}
}
	function delete()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'first name', 'required');
		$this->form_validation->set_rules('lastname', 'last name', 'required');
		$this->form_validation->set_rules('email', 'email', 'trim');
		$this->form_validation->set_rules('username', 'username', 'required');
       		if ($this->form_validation->run() == FALSE)
		{$this->load->view('templates/header');
			$this->load->view('deleteUser');
			$this->load->view('templates/footer');
		}
		else			
		{  
           
	  $mail=$_REQUEST['mail'];
      $data['query1']=$this->db->query("SELECT * from users WHERE email='$mail'");
      $data1['query1']=$query ;  
     if(!$query)
     {
      echo "sorry buddy";
     }
     else{
		   	$this->load->view('templates/header');
			$this->load->view('deleteUser',$data1);
			$this->load->view('templates/footer');
			
			}	}
	}
	function search()
	{    $this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		//$data=$_REQUEST['email'];
			if ($this->form_validation->run() == FALSE)
		{$this->load->view('templates/header');
			$this->load->view('deleteUser');
			$this->load->view('templates/footer');
		}
		else
		{   
			$search= $_POST["firstname"];
           $query = $this->db->query("SELECT * FROM users  WHERE email='$search';");
           $data['query']=$query ;
		    $this->load->view('templates/header',$data);
			$this->load->view('deleteUser',$data);
			$this->load->view('templates/footer',$data);

	
		}
	}
	function upload()
	{
		$this->load->view('upload_form');
	}

function AddLostPerson()
{   $this->load->view('templates/header');
	$this->load->view('AddLostPerson.php');
	$this->load->view('templates/footer');
}
function val_AddLostPerson()
{     
	$this->load->library('form_validation');
	$this->form_validation->set_rules('first_name','First Name','trim|required');
	$this->form_validation->set_rules('last_name','Last Name','trim|required');
	$this->form_validation->set_rules('complexion','complexion field','trim|required');
	$this->form_validation->set_rules('PLastSeen','last seen place','trim|required');
	//$this->form_validation->set_rules('userfile','photo','trim|required');
	$this->form_validation->set_rules('language','Language','trim|required');
	$this->form_validation->set_rules('nationality','Nationality','trim|required');
	$this->form_validation->set_rules('contact','Contact number','trim|required');

    
if($this->form_validation->run()==FALSE)
{
$this->load->view('templates/header');
$this->load->view('AddLostPerson');
$this->load->view('templates/footer');
}
else
{
	$this->load->model('insert_contact');
	$query=$this->insert_contact->insertme();
	if($query)
	{   $this->load->view('templates/header');
		$this->load->view('lostAdd');
		$this->load->view('templates/footer');
	  
    }
 }

  
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
                    'title'=>$upload_data['client_name'],
                    'file'=>$upload_data['file_name'],
                    'width'=>$upload_data['image_width'],
                    'height'=>$upload_data['image_height'],
                    'type'=>$upload_data['image_type'],                  
                     'data'=>time(),
                       'size'=>$upload_data['file_size'],
				);
			$this->load->database();
			$this->db->insert('upload',$data_ary);
			$data=array('upload_data'=>$upload_data);
            $this->load->view('upload_success',$data);

		}
	}
	


    function users()
    {
 $this->load->library('pagination');
$this->load->library('pagination');
$config['base_url'] = 'http://localhost/CI/index.php/login/users/';
$config['total_rows']=$this->db->get('users')->num_rows();
$config['per_page'] = 5;
$config['num_links']=10;
$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<p>';
$config['full_tag_close'] = '</p>';
$config['first_link'] = false;
$config['next_link'] = '<img src="http://localhost/CI/images/NEXT.png"';
$config['next_tag_open'] = '<SPAN> ';
$config['next_tag_close'] = '</SPAN>';
$config['last_link'] = false;
$config['prev_link'] = '<img src="http://localhost/CI/images/previous.png"';
$config['prev_tag_open'] = '<SPAN>';
$config['prev_tag_close'] = '</SPAN>';
$config['cur_tag_open'] = '<b><font color="red">';
$config['cur_tag_close'] = '</b></font>';
$this->pagination->initialize($config);
$datax['query']=$this->db->get('users',$config['per_page'],$this->uri->segment(3));

	$this->load->view('templates/header', $datax);
	$this->load->view('users', $datax);
    $this->load->view('templates/footer');
	return $datax;
	
    }
    function del()
    {   $email =$_REQUEST['email'];
    	$queryr = $this->db->query("DELETE  FROM users  WHERE email='$email'");

    $this->load->view('templates/header');
	redirect('/users');
    $this->load->view('templates/footer');
   
    }
    function more()
    {
    	$more=$_REQUEST['more'];
    	//echo $more;
    	$data['query']=$this->db->query("SELECT * from missing_person WHERE lastname='$more'");
    	$this->load->view('templates/header');
    	$this->load->view('more.php',$data);
    	$this->load->view('templates/footer');
    }
    function load_search()
    {   $this->load->view('templates/header');
    	$this->load->view('search_box.php');
        $this->load->view('templates/footer');
    }
     function searchs()
    
    {
    $this->load->library('form_validation');
	$this->form_validation->set_rules('search','Search ','trim|required');
	$this->form_validation->set_rules('shirts','search by','trim|required');
   if($this->form_validation->run()==FALSE)
{
$this->load->view('templates/header');
$this->load->view('search_box');
$this->load->view('templates/footer');
}
else{   
	   //echo "enda";
    	$search=$_POST['search'];
    	//echo $search;
    	$shirts=$_POST['shirts'];
    	//echo $shirts;
    	 $this->load->library('pagination');
$this->load->library('pagination');
$config['base_url'] = "http://localhost/CI/index.php/login/searchs";
$config['total_rows']=$this->db->query("SELECT * from missing_person WHERE $shirts like '%$search%'")->num_rows();
$config['per_page'] = 2;
//echo $this->db->get('users')->num_rows();
$config['num_links']=10;
$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<p>';
$config['full_tag_close'] = '</p>';
$config['first_link'] = false;
$config['next_link'] = '<img src="http://localhost/CI/images/NEXT.png"';
$config['next_tag_open'] = '<SPAN> ';
$config['next_tag_close'] = '</SPAN>';
$config['last_link'] = false;
$config['prev_link'] = '<img src="http://localhost/CI/images/previous.png"';
$config['prev_tag_open'] = '<SPAN>';
$config['prev_tag_close'] = '</SPAN>';
$config['cur_tag_open'] = '<b><font color="red">';
$config['cur_tag_close'] = '</b></font>';
$this->pagination->initialize($config);
 $data['query']=$this->db->query("SELECT * from missing_person WHERE $shirts like'%$search%'");
$config['uri_segment'] = 3;

    	$this->load->view('templates/header');
    	$this->load->view('search',$data,$shirts,$search);
    	$this->load->view('templates/footer');
    }}
    function getAll()
    {
        $mail=$_REQUEST['mail'];
    	$data['query']=$this->db->query("SELECT * from users WHERE email='$mail'");
    	$this->load->view('templates/header');
    	$this->load->view('deleteUser.php',$data);
    	$this->load->view('templates/footer');	
    }
    function update()
    {
    echo $_POST['lastname'];
    echo $_POST['firstname'];
    echo $_POST['email'];
    echo $_POST['username'];
     $lastname= $_POST['lastname'];
     $firstname=$_POST['firstname'];
     $email=$_POST['email'];
     $username=$_POST['username'];
      	$data['query']=$this->db->query("UPDATE  users SET last_name='$lastname', first_name='$firstname', username='$username' WHERE email='$email' ");
      	if(!$data)
      	{
      		echo "no changes made";
      	}
      	else
      	{
    redirect('/users');
    }
    }
   	function admins()
	{
      $this->load->view('templates/header');
      $this->load->view('adminLogin');
      $this->load->view('templates/footer');
    }
     function Admin_Login()
{
      $this->db->where('username',$this->input->post('username'));
	$this->db->where('password',md5($this->input->post('password')));
	$this->db->where('type','admin');
	$query=$this->db->get('users');
	if($query->num_rows==1)
{
	$data=array(
'username'=>$this->input->post('username'),
'is_logged_in'=>true

		);
	$this->session->set_userdata($data);
	$this->session->set_userdata('username','mojo');
	$this->session->set_userdata('user_email','mojo@gmail.com');
	$this->session->set_userdata('login_attempt','3');
	//print_r($this->session->all_userdata());
	   redirect('/users');


}

else
{
      $_SESSION["mei"]="wrong password *";
      $this->load->view('templates/header');  
	  $this->load->view('/adminLogin'); 
	  $this->load->view('templates/footer');   
}
}
function edit()
{       
        $username=$this->session->userdata('username');
       // echo $username;
    	$data['query']=$this->db->query("SELECT * from users WHERE username='$username'");
    	$this->load->view('templates/header');
    	$this->load->view('UserEdit.php',$data);
    	$this->load->view('templates/footer');

}
function updateUser()
    {
    $image = null;
 $config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		//$config['max_size']	= '2000';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
        $config['encrypt_name']  = false;
          $config['overwrite']  = false;
          $config['x_axis'] = '100';
          $config['y_axis'] = '40';
           $config['rotation_angle'] = 'hor';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			echo "error";
			$photos=$upload_data['file_name'];
			echo "<script>
			alert('$photos');
           </script>";
		}
		else
		{     $upload_data =  $this->upload->data();
			
			echo $upload_data['file_name'];
			$photos=$upload_data['file_name'];
			echo "<script>
			alert('$photos');
           </script>";
        }
      echo $upload_data['file_name'];
    echo $_POST['lastname'];
    echo $_POST['firstname'];
    echo $_POST['email'];
    //echo $_POST['username'];
    $photo=$upload_data['file_name'];
    $lastname= $_POST['lastname'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $username=$this->session->userdata('username');
    $data['query']=$this->db->query("UPDATE users set first_name='$firstname',photo='$photo',email='$email', last_name='$lastname' WHERE username='$username'");
    redirect('/edit');}
    function indexx()
    {
    	$this->load->view("index.html");
    }
}

?>
