<?php


  class ExamController extends CI_Controller {
    public function __construct(){
    parent:: __construct(); 
    $this->load->model('Exam_model');
    $this->load->model('Question_model');
    $this->load->model('Option_model');
    }
    
//eto yung bago danne
public function addDetails(){ //form_validation add details of quiz
  $this->load->library('form_validation');
$this->form_validation->set_rules('exam_title','Quiz Title','trim|required');
$this->form_validation->set_rules('total_question','Total Question','trim|required');
$this->form_validation->set_rules('marks_if_right','Marks if correct','trim|required');
$this->form_validation->set_rules('marks_if_wrong','Marks if wrong','trim|required');
$this->form_validation->set_rules('exam_code','Exam_code','trim|required|exact_length[8]');

if($this->form_validation->run()){
           //true
  // $this->load->model("Exam_model");
//eto dinagdag ko
//forloop
  $exam_id = bin2hex(openssl_random_pseudo_bytes(10));
          $data=array(
    'exam_title' => $this->input->post('exam_title'),
    'total_question' => $this->input->post('total_question'),
    'marks_if_right' => $this->input->post('marks_if_right'),
    'marks_if_wrong' => $this->input->post('marks_if_wrong'),
    'exam_code' => $this->input->post('exam_code'),
    'exam_id' => $exam_id,
    );
  $this->Exam_model->add($data);
  // var_dump($data);
  //  exit;
  $this->load->view('examview/quizform',$data);
  // redirect(base_url("ExamController/addquestions/".$exam_id));//nagpasa ng parameter
      }
else{
  //false
  $this->load->view('examview/exam');
}

}

public function addquestions($exam_id){
$post = $this->input->post();
// if(isset($post) && $post != null) {
// echo "<pre>";
// print_r($post);
// exit;

// }
$total_question = $this->Question_model->gettotalquestion($exam_id);
// $data=array(
// 'exam_id' => $exam_id,
// 'total_question'=> $total_question[0]['total_question'],
// );
   $this->Question_model->input($total_question,$exam_id);
   
   $this->load->view('examview/quizform',$data);
   
}

public function Join(){
  $this->load->view('examview/joinquiz');	
  }

public function AnswerQuiz(){
  $attempt_code=$this->input->post('attempt_code');
  $query=$this->Exam_model->checkcode($attempt_code);
  if($query){
    $this->load->view('examview/takequiz');
  }
  else{
    var_dump($attempt_code);
    var_dump($exam_code);
    exit;
  }
}

}