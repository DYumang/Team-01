<?php
    class Exam_model  extends CI_Model{

        public function __construct() {
            $this->load->database();
        }

        public function add($data){
       
            $this->db->insert('exam_details_table',$data);
        
        }
    }
?>