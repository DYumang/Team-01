<?php
defined('BASEPATH') OR exit('No direct script access allowed');



	class Welcome extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper('string');
		$this->load->model('Crud_model');
		$this->load->model('Quiz_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function Profile()
		{
			$this->load->view('profile/userProfile');
		}

		public function ProfileUpdate()
		{
			$this->load->view('profile/userProfileUpdate');
		}

		public function Study()
		{
			$this->load->view('StudyTips');
		}
		
		public function Uploads()
		{
			$this->load->view('profile/uploads');
		}
		
	function UpdateData()
		{
			$this->Crud_model->updateData();

			$this->load->view('userProfile');		
				
		}
	






	public function RegisterNow()
	{
		$this->Crud_model->createData();

		$this->load->view('login');		
			
	}

	public function Login()
	{
		$this->load->view('login');	
	}

	public function Landing(){
		$this->load->view('landing');	
	}

	public function AboutFunction (){
		$this->load->view('aboutview');
	}

	public function Dashboard()
	{
		$this->load->view('dashboard');
	}

	public function LogoutController(){
		$this->session->unset_userdata(array('username','password'));
        $this->session->sess_destroy();
        redirect (base_url() . 'Welcome/Login');
	}

	public function loginnow()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$username = $this->input->post('username');
			$password = $this->input->post('password');

		if($this->form_validation->run()== FALSE){
			redirect (base_url() . 'Welcome/Login');
		}
		else{
					
			$status = $this->user_model->loginmodel($username, sha1($password));
			if($status!=false){
				$session_data = array(
				'username' => $username,
				'id' => $status->id,
				);

				$this->session->set_userdata($session_data);
				$this->load->view('dashboard');
			}else{


				$this->session->set_flashdata('error', 'Invalid username and Password');
				redirect (base_url() . 'Welcome/Login');
			}

		 }
	}

//eto yung bago danne
	public function addDetails(){ //form_validation add details of quiz
        $this->load->library('form_validation');
		$this->form_validation->set_rules('exam_title','Quiz Title','trim|required');
		$this->form_validation->set_rules('total_question','Total Question','trim|required');
		$this->form_validation->set_rules('marks_if_right','Marks if correct','trim|required');
		$this->form_validation->set_rules('marks_if_wrong','Marks if wrong','trim|required');
		$this->form_validation->set_rules('exam_code','Exam_code','trim|required');
	
			if($this->form_validation->run()){
                 //true
				$this->load->model("Quiz_model");
//eto dinagdag ko
				$exam_id = bin2hex(openssl_random_pseudo_bytes(10));
                $data=array(
					'exam_title' => $this->input->post('exam_title'),
					'total_question' => $this->input->post('total_question'),
					'marks_if_right' => $this->input->post('marks_if_right'),
					'marks_if_wrong' => $this->input->post('marks_if_wrong'),
					'exam_code' => $this->input->post('exam_code'),
					'exam_id' => $exam_id,
					);
				$this->Quiz_model->add($data);
				redirect(base_url("Welcome/addquestions/".$exam_id));//nagpasa ng parameter
            }
			else{
				//false
				$this->load->view('examview/exam');
			}

	}

	public function addQuestions($exam_id){

		$post = $this->input->post();
		if(isset($post) && $post != null) {
		echo "<pre>";
		print_r($post);
		exit;
		}
		//    $this->load->library('form_validation');
		//    $this->form_validation->set_rules('qns','Question','trim|required');
		//    $this->form_validation->set_rules('options','1','option','trim|required');
		//    $this->form_validation->set_rules('options','2','option','trim|required');
		//    $this->form_validation->set_rules('options','3','option','trim|required');
		//    $this->form_validation->set_rules('options','4','option','trim|required');
		//    $this->form_validation->set_rules('answer_id','answer','trim|required');
        //    if($this->form_validation->run()){

			// get = question_no
			// get = examid
			// get =default choice
			//true
		//    $this->load->model("Quiz_model");
		//    $question_id = bin2hex(openssl_random_pseudo_bytes(10));
	    //  $oaid = bin2hex(openssl_random_pseudo_bytes(10));
	    //	$obid = bin2hex(openssl_random_pseudo_bytes(10));
	    //	$ocid = bin2hex(openssl_random_pseudo_bytes(10));
		//  $odid = bin2hex(openssl_random_pseudo_bytes(10));
		    
		//    $ques=array(
		// 	   'qns' => $this->input->post('qns'),
		// 	   'options' => $this->input->post($depende sa i , '1 '),
		// 	   'options' => $this->input->post($depende sa i , '2 '),
		//     'options' => $this->input->post($depende sa i , '3 '),
		//     'options' => $this->input->post($depende sa i , '4 '),
		//       'ans'   => $this->input->post('ans' tapos depende sa $i)
		// 	   'qa' => qid -> $a -> $oaid, feel ko sa model to 
		//     'qb' => qid -> $b -> $obid,
		//     'qc' => qid -> $c -> $ocid,
		//     'qd' => qid -> $d -> $odid, 
		// 	   );

		    //    switch($e){ model din ata
			// 	   case= 'a': $answer_id=$oaid;break;
			// 	   case= 'b': $answer_id=$obid;break;
			// 	   case= 'c': $answer_id=$ocid;break;
			// 	   case= 'd': $answer_id=$odid;break;
			//     maglalagay muna ako default $answer_id=$oaid;
			// c
			//    }
      
		//    $this->Quiz_model->add($data);
		//    redirect(base_url() . "Welcome/addquestions");
	   
	   $total_question = $this->Quiz_model->gettotalquestion($exam_id);

	  
	   $data=array(
		'exam_id' => $exam_id,
		'total_question'=> $total_question[0]['total_question'],
		);
		
           $this->load->view('examview/quizform',$data);
	}

    public function Join(){
		$this->load->view('joinquiz');	
	}


}




