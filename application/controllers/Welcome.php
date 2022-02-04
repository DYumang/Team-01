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
		public function RegisterNow()
		{
			$this->Crud_model->createData();
			$this->load->view('login');			
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
			$this->form_validation->set_rules('username','Username', 'required');
			$this->form_validation->set_rules('password','Password', 'required');
			$username = $this->input->post('username');
			$password = $this->input->post('password');	
			if($this->form_validation->run()== FALSE)
			{
				redirect (base_url() . 'Welcome/Login');
			}
			else
			{	
				$status = $this->user_model->loginmodel ($username, sha1($password));
				if($status!=false)
				{
					$session_data = array(
						'username' => $username,
						'id' => $status->id,
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
}




