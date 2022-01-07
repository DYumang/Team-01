<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		$this->db->insert('users',$data);
	}

	function checkPassword($password,$email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE password='$password' AND email='$email' AND status='1'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

	function fetch_pass($session_id)
	{
		$fetch_pass=$this->db->query("select * from user_login where id='$session_id'");
		$res=$fetch_pass->result();
	}

	function change_pass($session_id,$new_pass)
	{
		$update_pass=$this->db->query("UPDATE user_login set pass='$new_pass'  where id='$session_id'");
	}
}
