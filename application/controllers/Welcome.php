<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Crud_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

        public function Profile()
		{
			$this->load->view('userProfile');
		}

		public function ProfileUpdate()
		{
			$this->load->view('userProfileUpdate');
		}

		public function Study()
		{
			$this->load->view('StudyTips');
		}
		
		public function Uploads()
		{
			$this->load->view('uploads');
		}

		public function Home()
		{
			$this->load->view('dashboard');
		}

		function UpdateData()
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

	public function Landing(){
		$this->load->view('landing');	
	}

	public function AboutFunction (){
		$this->load->view('aboutview');
	}

	public function Dashboard()
	{
		$this->load->view('dashboard');
	}

	public function LogoutController(){
		$this->session->unset_userdata(array('username','password'));
        $this->session->sess_destroy();
        redirect (base_url() . 'Welcome/Login');
	}



	public function loginnow()
	{
		
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$username = $this->input->post('username');
			$password = $this->input->post('password');

		if($this->form_validation->run()== FALSE){
			redirect (base_url() . 'Welcome/Login');
		}
		else{
					
			// $status = $this->user_model->loginmodel($username, sha1($password));
			$status = $this->user_model->loginmodel($username, $password);
			if($status!=false){
				$session_data = array(
				'username' => $username,
				'id' => $status->id,
				);

				$this->session->set_userdata($session_data);
				$this->load->view('dashboard');
			}else{


				$this->session->set_flashdata('error', 'Invalid username and Password');
				redirect (base_url() . 'Welcome/Login');
			}

		 }
	}


}




