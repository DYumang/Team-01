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

        private function savequestion($exam_id,$questions)
        {
            $question_id = bin2hex(openssl_random_pseudo_bytes(10));
            $qnstext=array(  
                'exam_id'=> $exam_id,  
                'question_id'=> $question_id, 
                'questions'=> $questions,
             );
             $this->db->insert('questions_details_table',$qnstext);
            //  echo $this->db->last_query()."<br>";
             return $question_id;
        }

        private function processoptions($question_id,$option){
            $optionid = bin2hex(openssl_random_pseudo_bytes(10));
            $qnstext=array( 
                'question_id'=> $question_id,
                'options'=> $option,
                'optionid' => $optionid
             );
            $this->db->insert('options_details_table',$qnstext);
            // echo $this->db->last_query()."<br>";
             return $optionid;
        }

        private function updatequestion($exam_id,$question_id,$optionid){
            $this->db->set('answer',$optionid);
            $this->db->where('exam_id',$exam_id);
            $this->db->where('question_id',$question_id);
            $this->db->update('questions_details_table');
            // echo $this->db->last_query()."<br>";
            return;
        }

        public function processquestions($data=array())
        {
            $exam_id=$data['exam_id'];
            foreach($data['questions'] as $input=>$value){
                $question_id=$this->savequestion($exam_id,$value['name']);
                foreach($value['options'] as $key=>$opt){
                    $optionid=$this->processoptions($question_id,$opt);
                    if($key==$value['answer']){
                        $this->updatequestion($exam_id,$question_id,$optionid);
                    }
                }
            }
        }

        
    }
?>