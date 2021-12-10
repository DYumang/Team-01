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


		public function RegisterNow()
		{
			$this->Crud_model->createData();

			$this->load->view('login');		
				
		}

		public function Login()
		{
			$this->load->view('login');	
		}


	function Dashboard()
	{
		$this->load->view('dashboard');
	}

	public function loginnow()
	{

		
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$username = $this->input->post('username');
			$password = $this->input->post('password');

		if($this->form_validation->run()== FALSE){
			// redirect (base_url() . 'Welcome/Login');
			$this->load->view("login");

		}
		else{
					
	
			if($this->user_model->loginmodel($username, $password)){
				$session_data = array(
				'username' => $username
				);

				$this->session->set_userdata($session_data);
				$this->load->view('dashboard');
			}else{


				$this->session->set_flashdata('error', 'Invalid username and Password');
				// redirect (base_url() . 'Welcome/Login');
				$this->load->view("login");
			}

		 }

		// else
		// {
		// 	echo "login";
		// 	die();
		// 	$this->load->view('login');
		// }

	}


}




