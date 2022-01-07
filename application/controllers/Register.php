<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}

	function registerNow()
	{
		$data = array();

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');


			if(empty($username) || empty($email) || empty($password)){
				$data['errorMessage'] = "Please enter all fields";
			}
			else{
				$data = array(
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'status'=>'1'
				);

				$this->load->model('user_model');
				$this->user_model->insertuser($data);
				redirect(base_url('register'));
			}
		}
		
		$this->load->view('register', $data);
	}
}
