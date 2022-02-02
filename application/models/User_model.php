<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('User_model');
    }
    public function insertuser($data)
    {
        $this->db->insert('tbl_name',$data);
    }
    public function loginmodel($username,$password)
    {
        $password = $password;
        $this->db->select('id,username');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get("tbl_name");
        
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
    public function getData($session_id)
	{
		$fetch_pass=$this->db->query("select password from tbl_name where id='$session_id'");
		$pass=$fetch_pass->row();
		return $pass;
	}
   public function profile_update($session_id,$new_pass,$lastName,$firstName,$username,$birthdate)
    {
        $update_pass=$this->db->query("UPDATE tbl_name set password='$new_pass'  where id='$session_id'");
        $que_pass=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row_pass=$que_pass->row();   

        $update_lname=$this->db->query("UPDATE tbl_name set lastName='$lastName'  where id='$session_id'");
		$que_lname=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row_lname=$que_lname->row(); 

        $update_fname=$this->db->query("UPDATE tbl_name set firstName='$firstName'  where id='$session_id'");        
		$que_fname=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row_fname=$que_fname->row(); 

        $update_uname=$this->db->query("UPDATE tbl_name set username='$username'  where id='$session_id'");
		$que_uname=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row_uname=$que_uname->row(); 

        $update_bday=$this->db->query("UPDATE tbl_name set birthdate='$birthdate'  where id='$session_id'");
		$que_bday=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row_bday=$que_bday->row();         
    }
    public function profile($id)
    {  
        $query=$this->db->get_where('tbl_name',array('id'=>$id));
        return $query->row(); 
    }
 }