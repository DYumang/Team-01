<?php 
class Update extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // remove this
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('User_model'); // replace with user model
	}       
	
	public function index()
	{
		if($this->input->post('change_pass'))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id');
			$que=$this->db->query("select * from user_login where id='$session_id'"); // move this to  user model
			$row=$que->row(); // move this to user model
			// currentPassword =  this->UserModel->getPassword(sessionId);
			
			// add this condition to if currentPassword == oldPassword
			if((!strcmp($old_pass, $new_pass))&& (!strcmp($new_pass, $confirm_pass))){
				$this->User_model->change_pass($session_id,$new_pass);
				echo "Password changed successfully !";
			}
			else{ 
				echo "Invalid";
			}
		}
		$this->load->view('update');	
	}
}