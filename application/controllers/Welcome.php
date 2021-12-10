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
			redirect(base_url('welcome/index'));	
			$this->session->set_flshdata('success', 'Successfully User Created');
				
		}

		public function Login()
		{
			$this->load->view('login');	
		}

		    function loginnow()
				{
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('password','Password','required');

					if($this->form_validation->run()==TRUE)
					{
						$username=$this->input->post('username');
						$password=$this->input->post('password');
						$password=sha1($password);


						$this->load->model('User_model');
						$status = $this->User_model->checkpassword('$password','$username');
						if($status!=false)
						{
							$username=$status->username;
							$password=$status->password;

							$session_data=array(
								'username'=>$username,
								'password'=>$password,
							);
							$this->session->set_userdata('UserLoginSession',$session_data);
							redirect (base_url('welcome/Dashboard'));
							
						}
						else 
						{
							$this->session->set_flashdata('error',"username or Password is wrong");
							redirect(base_url('welcome/Login'));
						}
					}
					else
					{
							$this->session->set_flashdata('error',"Fill all the required fields");
							redirect(base_url('welcome/Login'));
					}
			}
	}

	function Dashboard()
	{
		$this->load->view('dashboard');
	}
}
