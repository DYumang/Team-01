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
            for($i=0;$i<count($data['questions']);$i++)
            {
                $query=$this->db->get_where('questions_details_table',array('exam_id' => $data['exam_id']));
                $query=$query->result_array();
                if($query[$i]['answer'] == $data['questions'][$i]['useranswer']){
                    $data['Total_Points']+=$data['Correct_Points'];
                }
                else{
                    if($data['Total_Points']>0){
                    $data['Total_Points']-=$data['Deduction_Points'];
                    }
                    else{
                        $data['Total_Points']=0;
                    }
                }
            }
            $this->db->set('exam_title',$data['Title']);
            $this->db->set('exam_code',$data['quizcode']);
            $this->db->set('total_question',$data['Total_Question']);
            $this->db->set('marks_if_right',$data['Correct_Points']);
            $this->db->set('marks_if_wrong',$data['Deduction_Points']);
            $this->db->set('exam_id',$data['exam_id']);
            $this->db->set('user_id',$data['user_id']);
            $this->db->set('score',$data['Total_Points']);
            $this->db->where('id',$data['id']);
            $this->db->insert('exam_details_table');
            return $data;
        }
        public function viewscore($data=array()){
            $this->db->select('id,exam_id,total_question,score');
            $this->db->where('id',$data['id']+1);
            $query=$this->db->get('exam_details_table');
            $result=$query->result_array();
            // debug($result,TRUE);
            return $result;
        }
    }
?>