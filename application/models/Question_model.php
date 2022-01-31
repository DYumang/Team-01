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
}
?>