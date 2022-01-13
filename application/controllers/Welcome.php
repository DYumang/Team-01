<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct() {
			parent:: __construct();
			$this->load->model('Crud_model');
		}

		function index()
		{
			$this->load->view('home');
		}


		function RegisterNow()
		{
			$this->Crud_model->createData();

			$this->load->view('login');		
				
		}

		function Login()
		{
			$this->load->view('login');	
		}

		public function Landing(){
			$this->load->view('landing');	
		}

	function AboutFunction (){
		$this->load->view('aboutview');
	}

	function Dashboard()
	{
		$this->load->view('dashboard');
	}

	function LogoutController(){
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
					
	
			if($this->user_model->loginmodel($username, $password)){
				$session_data = array(
				'username' => $username
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




