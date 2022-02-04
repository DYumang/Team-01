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
            $this->db->select('exam_id,total_question,exam_title');
            $this->db->from('exam_details_table');
            // $this->db->from('questions_details_table');
            // $this->db->from('options_details_table');
            $this->db->where('exam_code',$attempt_code);
            $query=$this->db->get();
            $result = $query->row_array();
            return $result;
        }

        public function gettotalquestion($exam_id)
        {
            $this->db->select('total_question');
            $this->db->where('exam_id',$exam_id);
            $query=$this->db->get('exam_details_table');
            $result = $query->result_array();
            return $result;
        }

        public function geteid($exam_id)
        {
            $this->db->select('exam_id');
            $query=$this->db->get('exam_details_table');
            $result = $query->result_array();
            return $result;
        }
        
        public function getquestion($query)
        {
            $this->db->select('questions,$question_id');
            $this->db->from('questions_details_table');
            $this->db->where('exam_id',$query['exam_id']);
            $queryy=$this->db->get();
            $result=$querry->row_array();
            var_dump($result);
            exit;
            // var_dump($queryy);
            // exit;
            // $queryy=$this->db->where('exam_id',$query);
            // $result=$queryy->row_array();
            // var_dump($queryy);
            // exit;
        }

        private function getoptions($question_id,$option_id){
            $this->db->select('option');
            $this->db->where('option_id',$option_id);
            $this->db->where('question_id',$question_id);
            $query=$this->db->get('options_details_table');
            $result = $query->result_array();
            return $result;
        }

        private function getanswer($exam_id,$question_id,$optionid){
            $this->db->select('answer',$optionid);
            $this->db->where('exam_id',$exam_id);
            $this->db->where('question_id',$question_id);
            $query=$this->db->get('questions_details_table');
            $result = $query->result_array();
            return $result;
        }

       

        public function answerprocess($data=array())
        {
            $exam_id=$data['exam_id'];
            foreach($data['questions'] as $input=>$value){
                $question_id=$this->getquestion($exam_id,$value['name']);
                foreach($value['options'] as $key=>$opt){
                    $optionid=$this->getoptions($question_id,$opt);
                    if($key==$value['answer']){
                        $this->getanswer($exam_id,$question_id,$optionid);
                    }
                }
            }
        }
    }
?>