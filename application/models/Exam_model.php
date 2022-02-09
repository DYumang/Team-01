<?php
    class Exam_model  extends CI_Model
    {
        public function __construct() 
        {
            $this->load->database();
        }
        public function add($data)
        {   
            $this->db->insert('exam_details_table',$data);
        }
        public function checkcode($attempt_code)
        {
            $this->db->select('*');
            $this->db->from('exam_details_table');
            $this->db->where('exam_code',$attempt_code);
            $query=$this->db->get();
            $result = $query->result_array();
            return $result;
        }
    }
?>