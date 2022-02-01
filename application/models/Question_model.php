<?php
    class Question_model  extends CI_Model{
        public function __construct() {
            $this->load->database();
        }
        
        public function gettotalquestion($exam_id){ //function para makuha yung total questions
        $this->db->select('total_question');
        $this->db->where('exam_id',$exam_id); //unique
        $query=$this->db->get('exam_details_table');
        $result = $query->result_array();
        return $result;
        }

        public function input($exam_id,$questions,$question_id){
           
            $question_id = bin2hex(openssl_random_pseudo_bytes(10));
            $qnstext=array(
            'exam_id'=>$exam_id,
            'questions' =>$this->input->post('questions'),
            'question_id'=> $question_id,
             );
             $this->db->insert->('questions_details_table',$qnstext);
            //  $qnstext=$this->db->query("INSERT INTO(`exam_id`, `question_id`, `questions`) VALUES ('$exam_id','$questions','$question_id')");
            // $this->db->insert('questions_details_table',$qnstext);
            // questions_details_table`(`exam_id`, `question_id`, `questions`, `question_no`)

            // $update_pass=$this->db->query("UPDATE tbl_name set password='$new_pass'  where id='$session_id'");
            // $que_pass=$this->db->query("select * from tbl_name where id='$session_id'"); 
            // $row_pass=$que_pass->row();
            }
        }

?>