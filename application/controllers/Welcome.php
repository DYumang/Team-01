<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('string');
		$this->load->model('Crud_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function Profile()
	{
		$session =$this->session->userdata();
		$session_id = $session['id'];
		$data['profile'] = $this -> user_model -> profile($session_id);
		$this->load->view('profile/userProfile',$data);
	}

	public function ProfileUpdate()
	{
		$this->load->view('profile/userProfileUpdate');
	}

	public function Study()
	{
		$session =$this->session->userdata();
		$session_id = $session['id'];
		$data['profile'] = $this -> user_model -> profile($session_id);
		$this->load->view('StudyTips',$data);
	}
		
	public function Uploads()
	{
		$this->load->view('profile/uploads');
		
	}	
	
	public function UpdateData()
	{
		$this->Crud_model->updateData();		
		$this->load->view('userProfile');			
	}

		
	public function email_verification()
	{
		$this->load->view('email_verification');
	}
		
	public function RegisterNow()
	{
		$verification_key = md5(rand());
		$this->Crud_model->createData($verification_key);

		$subject = "Email Verification";
		$data = array(
		'verification_key' => $verification_key
		);
		$message = $this->load->view('email_verification',$data,true);

			$this->email->initialize($this->config->item('email'));
			$this->email->set_newline("\r\n");
			$this->email->from('softwareeng.team.01@gmail.com','QuizHub Admin');
			$this->email->to($this->input->post('email'));
			$this->email->subject($subject);
			$this->email->message($message);	
		if($this->email->send())
		{
			$this->load->view('login');	
		}else{
			redirect(base_url('welcome/failedemail'));
		}				
	}

	public function verify_email()
	{
		if($this->uri->segment(3)){
				  $verification_key = $this->uri->segment(3); 	
			if($this->Crud_model->verify_email($verification_key))
			{
				$this->load->view('login');	
		   }
		   else
			{
			redirect(base_url('welcome/failedemail'));
			}
		}
	}

	public function Login()
	{
		$this->load->view('login');	
	}

	public function Landing()
	{
		$this->load->view('landing');	
	}

	public function AboutFunction ()
	{
		$this->load->view('aboutview');
	}

	public function Invalid()
	{
		$this->load->view('Invalid');
	}
		
	public function Home()
	{
		$session =$this->session->userdata();
		$session_id = $session['id'];
		$data['profile'] = $this -> user_model -> profile($session_id);
		$this->load->view('dashboard',$data);
	}

	public function LogoutController()
	{
		$this->session->unset_userdata(array('username','password'));
		$this->session->sess_destroy();
		redirect (base_url() . 'Welcome/Login');
	}

	public function loginnow()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$email = $this->input->post('email');
		$password = $this->input->post('password');	
		if($this->form_validation->run()== FALSE)
		{
			redirect (base_url() . 'Welcome/Login');
		}
		else
		{	
			$status = $this->user_model->loginmodel ($email, $password);
			if($status!=false)			{
				$session_data = array(
				'email' => $email,
				'id' => $status->id,
				'username' => $status->username,
				);
				$this->session->set_userdata($session_data);
				$session =$this->session->userdata();
				$session_id = $session['id'];
				$data['profile']=$this->user_model->profile($session_id);
				$this->load->view('dashboard',$data);
				redirect('welcome/Home');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid username and Password');
				redirect (base_url() . 'Welcome/Login');
			}
		}
	}

	public function UpdateInfo(){
		if($this->input->post('profile_update'))
		{
			$lastName=$this->input->post('lastName');
			$firstName=$this->input->post('firstName');
			$username=$this->input->post('username');
			$birthdate=$this->input->post('birthdate');
			$session =$this->session->userdata();
			$session_id = $session['id'];
			$this->User_model->profile_update($session_id,$lastName,$firstName,$username,$birthdate);   			
		}
		$this->load->view('profile/userProfileUpdate');	
		redirect('welcome/Profile');		
	}


}




