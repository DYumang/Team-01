<?php 
class Update extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('User_model');
	}       
	
	public function index()
	{
		if($this->input->post('change_pass'))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session =$this->session->userdata();
			$session_id = $session['id'];
			$user_data=$this->User_model->getData($session_id);
			// add this condition to if currentPassword == oldPassword
			if($user_data->password == sha1($old_pass) && $old_pass != $new_pass && $new_pass == $confirm_pass){
				$this->User_model->change_pass($session_id,sha1($new_pass));
				echo "Password changed successfully !";
			}
			else{ 
				echo "Invalid";
			}
		}
		$this->load->view('update');	
	}
}