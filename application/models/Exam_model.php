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
            $this->db->select('exam_code,id,exam_id,total_question,exam_title,marks_if_right,marks_if_wrong');
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
            // for($i=0;$i<$query['total_question'];$i++){
            $this->db->select('exam_id,questions,question_id,answer');
            $this->db->from('questions_details_table');
            
            for($i=0;$i<count($query);$i++)
            {
                $this->db->where('exam_id',$query['exam_id']);
                $queryy[$i]=$this->db->get();
                $result=$queryy[$i]->result_array();
                return $result;
            }
            // exit;
            // var_dump($queryy);
            // exit;
            // $queryy=$this->db->where('exam_id',$query);
            // $result=$queryy->row_array();
            // var_dump($queryy);
            // exit;
        }

        public function getoptions($queryy=array()){
            // var_dump($queryy);
            // exit;
            // $this->db->select('question_id,options,optionid');
            for($i=0;$i<count($queryy);$i++)
            {
                $this->db->select('question_id,options,optionid');
                $this->db->where('question_id',$queryy[$i]['question_id']);
                $result=$this->db->get('options_details_table');
                $queryy[$i]['options']=$result->result_array();
            }
            return $queryy;
        }

        private function getanswer($exam_id,$question_id,$optionid){
            $this->db->select('answer',$optionid);
            $this->db->where('exam_id',$exam_id);
            $this->db->where('question_id',$question_id);
            $query=$this->db->get('questions_details_table');
            $result = $query->result_array();
            return $result;
        }

       public function processanswer($data=array())
       {
            $score=0;
            for($i=0;$i<count($data['questions']);$i++)
            {
                $query=$this->db->get_where('questions_details_table',array('exam_id' => $data['exam_id']));
                $query=$query->result_array();
                // echo "<pre>";
                // var_dump($data);
                // exit;
                if($query[$i]['answer'] == $data['questions'][$i]['useranswer']){
                    $score+=$data['Correct_Points'];
                    // echo"<pre>";
                    // echo $score;
                    // echo "tama";
                }
                else{
                    $score-=$data['Deduction_Points'];
                    // echo"<pre>";
                    // echo $score;
                    // echo "mali";
                }
            }
            $this->db->set('exam_title',$data['Title']);
            $this->db->set('exam_code',$data['quizcode']);
            $this->db->set('total_question',$data['Total_Question']);
            $this->db->set('marks_if_right',$data['Correct_Points']);
            $this->db->set('marks_if_wrong',$data['Deduction_Points']);
            $this->db->set('exam_id',$data['exam_id']);
            $this->db->set('user_id',$data['user_id']);
            $this->db->set('score',$score);
            $this->db->where('id',$data['id']);
            $this->db->insert('exam_details_table');
       }

        // public function answerprocess($data=array())
        // {
        //     $exam_id=$data['exam_id'];
        //     foreach($data['questions'] as $input=>$value){
        //         $question_id=$this->getquestion($exam_id,$value['name']);
        //         foreach($value['options'] as $key=>$opt){
        //             $optionid=$this->getoptions($question_id,$opt);
        //             if($key==$value['answer']){
        //                 $this->getanswer($exam_id,$question_id,$optionid);
        //             }
        //         }
        //     }
        // }
    }
?>