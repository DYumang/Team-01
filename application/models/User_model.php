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
         $this->db->where('username',$username);
         $this->db->where('password',$password);
         $query = $this->db->get("tbl_name");
         
         if($query->num_rows()==1)
         {
            
            // die();
            return true;
         }
         else
         {
             return false;
         }
        }


 }