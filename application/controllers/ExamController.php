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
				redirect(base_url("ExamController/addExam/".$exam_id));//nagpasa ng parameter
            }
			else{
				$this->load->view('examview/exam');
			}

    }

    public function addQuestions($exam_id){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('question','Quiz Title','trim|required');
      $this->form_validation->set_rules('option', 'Options');

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
      redirect(base_url("ExamController/addExam/".$exam_id));//nagpasa ng parameter
          }
    else{
      $this->load->view('examview/quizform');
    }

  }


    public function addExam($exam_id,$question_id)
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
    }
  }