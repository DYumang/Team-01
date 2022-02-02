<?php
    class Question_model  extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        
        public function gettotalquestion($exam_id)
        {
            $this->db->select('total_question');
            $this->db->where('exam_id',$exam_id);
            $query=$this->db->get('exam_details_table');
            $result = $query->result_array();
            return $result;
        }

        public function input($total_question,$exam_id)
        {
            $question_id = bin2hex(openssl_random_pseudo_bytes(10));
            $qnstext=array(  
                'exam_id'=> $exam_id,  
                'questions' => array($this->input->post('questions'),'question_id'=> $question_id),
             );
             var_dump($qnstext);
             $this->db->insert('questions_details_table',$qnstext);
            }
        }

?>