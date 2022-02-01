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
		

		if($this->input->post('profile_update')){
			$lastName=$this->input->post('lastName');
			$firstName=$this->input->post('firstName');
			$username=$this->input->post('username');
			$birthdate=$this->input->post('birthdate');
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session =$this->session->userdata();
			$session_id = $session['id'];
			$user_data=$this->User_model->getData($session_id);
			// add this condition to if currentPassword == oldPassword
			if($user_data->password == $old_pass && $old_pass != $new_pass && $new_pass == $confirm_pass){
<<<<<<< HEAD
				$this->User_model->profile_update($session_id,sha1($new_pass),$lastName,$firstName,$username,$birthdate);
=======
				$this->User_model->profile_update($session_id,$new_pass,$lastName,$firstName,$username,$birthdate);
>>>>>>> 46a299707b57cc186130b9444712b80048b236ed
								
			}
			else{ 
				echo "Invalid";
			}
		}
<<<<<<< HEAD
		$this->load->view('profile/userProfileUpdate');	
		redirect('welcome/Profile');
=======

		$this->load->view('userProfileUpdate');	
		redirect('welcome/Home');
>>>>>>> 46a299707b57cc186130b9444712b80048b236ed
	}
}