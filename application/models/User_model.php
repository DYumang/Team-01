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

        function checkpassword($password,$username)
        {
         $query=$this->db->query("SELECT * FROM tbl_name WHERE password='$password' AND username='$username'");
         if($query->num_rows()==1)
         {
            return $query->row();
         }
         else
         {
             return false;
         }
        }
 }