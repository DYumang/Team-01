<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function index()
	{
		$this->load->view('login');
	}

	function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password,$email);
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username'=>$username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error','Email or Password is Wrong');
					redirect(base_url('/login'));
				}

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('/login'));
			}
		}
	}

	function logout()
	{
		session_destroy();
		redirect(base_url('/login'));
	}
}
