<?php
class Quiz_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        
    }
    public function add($data)
    {
        $this->db->insert('exam_details_table',$data);
	}
    public function gettotalquestion($exam_id)
    {
        $this->db->select('total_question');
        $this->db->where('exam_id',$exam_id);
        $query=$this->db->get('exam_details_table');
        $result = $query->result_array();
        return $result;
    }

}

