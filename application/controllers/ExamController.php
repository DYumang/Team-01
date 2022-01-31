<?php


  class ExamController extends CI_Controller {
    public function __construct() {
    parent:: __construct(); 
    $this->load->model('Exam_model');
    $this->load->model('Question_model');
    $this->load->model('Option_model');
    $this->load->model('Context');
    $dbContext = new Context();
    }

    public function addDetails(){
        $this->load->library('form_validation');
		  $this->form_validation->set_rules('exam_title','Quiz Title','trim|required');
		$this->form_validation->set_rules('exam_code','Exam_code','trim|required|exact_length[8]');
			if($this->form_validation->run()){
                 //true
				$this->load->model('Context');
				$exam_id = bin2hex(openssl_random_pseudo_bytes(10));

          $exam=array(
					'exam_title' => $this->input->post('exam_title'),
					'exam_code' => $this->input->post('exam_code'),
					'exam_id' => $exam_id,
					);

				$this->Context->CreateExam($exam);
				redirect(base_url("ExamController/addExam/"));//nagpasa ng parameter
            }
			else{
				$this->load->view('examview/exam');
			}

    }

    public function addQuestions(){ //di ko sure kung lalagyan ko ng parameter dito na #exam_id 
      //kasi dapat connected sya diba para malaman saang quiz ang problema nagkakaerror ng too may few arguments
      $this->load->library('form_validation');
      $this->form_validation->set_rules('question','Question','trim|required');
      $this->form_validation->set_rules('option', 'Options','trim|required');

    if($this->form_validation->run()){

      $this->load->model('Context');
      $question_id = bin2hex(openssl_random_pseudo_bytes(10));

        $question=array(
        'question_id' => $question_id,
        'question' => $this->input->post('question'),
        'exam_id' => $exam_id,
        );
      $this->Context->CreateQuestion($question);

       $option_id = bin2hex(openssl_random_pseudo_bytes(10));
       $option=array(
         'option_id' => $option_id,
         'option' => $this->input->post('option'),
         'question_id' => $question_id,
         'isCorrect'=> $this->input->post('isCorrect'),
        );
        $this->Context->CreateOption($option);
      redirect(base_url("ExamController/addExam/"));//nagpasa ng parameter
          }
    else{
      $this->load->view('examview/quizform');
    }

  }


    public function addExam() //ganun rin dito same sa line 38
    {
        $dbContext -> createExam($exam);
        $questionArray = $exam -> $questions;
            
        for($i = 0; $i < $questionArray.count(); $i++){
                $dbContext -> createQuestion($questionArray[$i]);
                $optionArray = $questionArray[$i] -> $options;
                
                for($j = 0; $j < $optionArray.count(); $j++){                    
                    $dbContext -> createOption($optionArray[$i]);
                }
            }
        return ok();
    }
  }