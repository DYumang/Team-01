<?php
    // include('Exam_model.php');   
    // include('Question_model.php');
    // include('Option_model.php');

     class Context extends CI_Model
     {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('Exam_model');
            $this->load->model('Question_model');
            $this->load->model('Option_model');

        }

        public function createExam(Exam $exam)
        {
            
            $examDbObject = (object) [
                'exam_id' => $exam -> id,
                'exam_title' => $exam -> title,
                'exam_code' => $exam -> exam_code,
                // 'total_question' => $exam -> total_question,
                'exam_created_date' => new date()
            ];

            $this->db->insert('tbl_exam_template', $examDbObject);
        }

        public function createQuestion(Question $question)
        {
            $questionDbObject = (object) [
                'question_id' => $question -> id,
                'question' => $question -> text,
                'exam_id' => $question -> exam_id
            ];
            $this->db->insert('tbl_question', $questionDbObject);
        }

        public function createOption(Option $option)
        {
            $optionDbObject = (object) [
                'option_id' => $option -> id,
                'option' => $option -> text,
                'question_id' => $option -> question_id,
                'isCorrect' => $option -> isCorrect
            ];
            $this->db->insert('tbl_option', $questionDbObject);
        }
    }
?>