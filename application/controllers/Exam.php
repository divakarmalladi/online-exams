<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {
	public $exam_id;
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('common_lib');
		$lastSegment = $this->uri->segment_array();
		$this->exam_id = end($lastSegment);
		$this->common_lib->check_session(end($lastSegment));
	}
	public function exam_instructions($exam_id)
	{
		$encDetails = explode('-', $this->common_lib->decrypt_string($exam_id)); 
		$exam_id = isset($encDetails[0])?$encDetails[0]:0;
		if($exam_id<=0){
			redirect('exam-categories');
		}
		$data = array();
		$data['exam_details'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description,tq,e_q_marks,exam_time,max_marks,', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$this->load->view('exam-instructions', $data);
	}
	public function exam_page($exam_id)
	{
		$encDetails = explode('-', $this->common_lib->decrypt_string($this->exam_id)); 
		$exam_id = isset($encDetails[0])?$encDetails[0]:0;
		$data = array();
		$data['exam_details'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description,tq,e_q_marks,exam_time,max_marks,', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$this->load->view('exam-page', $data);
	}
}
