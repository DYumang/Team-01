    <?php

class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    function insertuser($data)
    {
        $this->db->insert('tbl_name',$data);
    }

    
    function loginmodel($username,$password)
    {
        $password = $password;
        
        // $query=$this->db->query("SELECT * FROM tbl_name WHERE password='$password' AND username='$username'");
        $this->db->select('id,username');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get("tbl_name");
        
        if($query->num_rows()==1)
        {
        
        // die();
        return $query->row();
        }
        else
        {
            return false;
        }
    }

    function getData($session_id)
	{
		$fetch_pass=$this->db->query("select * from tbl_name where id='$session_id'");
		$res=$fetch_pass->row();
		return $res;
	}

	function change_pass($session_id,$new_pass)
	{
		$update_pass=$this->db->query("UPDATE tbl_name set password='$new_pass'  where id='$session_id'");
		$que=$this->db->query("select * from tbl_name where id='$session_id'"); 
		$row=$que->row(); 
	}


 }