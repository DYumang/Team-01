<?php

class Quiz_model extends CI_Model {
    public function __construct() {
        $this->load->database();
        
    }


        public function add($data){
       
        $this->db->insert('exam_details_table',$data);
	
	}

    // public function entry($data,$dataid){
      
	// 	$data=array(
    //         // 'quiz_id'=>$this->post(uniqid()),
    //         'question_title' => $this->input->post('question_title'),
    //         'option_title' => $this->input->post('option_title'),
    //         'answer_option' => $this->input->post('answer_option'),
	// 		);

    //     $question_id = bin2hex(openssl_random_pseudo_bytes(10));
    //     $option_id = bin2hex(openssl_random_pseudo_bytes(10));
    //     $dataid=array(
    //         'question_id' => $question_id,
    //         'option_id' => $option_id,
    //     );
        
	// 	$insertQuery=$this->db->insert('option_table',$data);
    //     $insertQuery=$this->db->insert('question_table',$dataid);
	// 	if($this->db->affected_rows()>0){
	// 		return 'Data has been added';
	// 	}else{
	// 		return 'Data has not been added';
	// 	}
	// }

    public function gettotalquestion($exam_id){ //function para makuha yung total questions
        $this->db->select('total_question');
        $this->db->where('exam_id',$exam_id); //unique
        $query=$this->db->get('exam_details_table');
        $result = $query->result_array();
        return $result;
    }

}

