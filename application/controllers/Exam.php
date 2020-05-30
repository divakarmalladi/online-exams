<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {
	public $exam_id;
	public $exam_paper;
	public $user_id;
	public $result_id;
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('common_lib');
		$lastSegment = $this->uri->segment_array();
		$this->exam_id = end($lastSegment);
		$this->common_lib->check_session(end($lastSegment));
		$this->user_id = $this->session->has_userdata('USERID')?$this->session->userdata('USERID'):'';
		$this->result_id = $this->session->has_userdata('result_id')?$this->session->userdata('result_id'):'';
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
	public function exam_page($exam_slug, $exam_id)
	{
		$data = array();
		$data['exam_slug'] = $exam_slug;
		$data['exam_id'] = $exam_id;
		$encDetails = explode('-', $this->common_lib->decrypt_string($this->exam_id)); 
		$exam_id = isset($encDetails[0])?$encDetails[0]:0;
		$data['exam_details'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description,tq,e_q_marks,exam_time,max_marks,', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$this->exam_paper = $this->session->has_userdata('exam_paper_'.$exam_id)?$this->session->userdata('exam_paper_'.$exam_id):'exam.json';
		if(!empty($data['exam_details']) && !file_exists('assets/json/questions/'.$this->exam_paper)){
			$this->exam_paper = $this->common_lib->prepare_questions_json($exam_id,$data['exam_details']);
		}
		$this->load->view('exam-page', $data);

	}
	public function exam_page_data()
	{
		$data = $this->input->post();

		$exam_id = $this->session->has_userdata('exam_id')?$this->session->userdata('exam_id'):0;
		$data['exam_details'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description,tq,e_q_marks,exam_time,max_marks,', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$this->exam_paper = $this->session->has_userdata('exam_paper_'.$exam_id)?$this->session->userdata('exam_paper_'.$exam_id):'';
		$presentQues = $data['quesNumber'];
		$data['quesNumber'] = $data['load']=='first'?0:($data['load']=='select'?$data['quesNumber']:$data['quesNumber']+1);
		if($data['load']=='first'){
			$this->result_id =  $result_id = $this->home_model->insertQuery('exams_result', array('user_id'=>$this->user_id,'tid'=>$exam_id));
			$this->session->set_userdata('result_id',$result_id);
		}
		if(isset($data['action']) && $data['action']!=''){
			$qn_data = array('qn_id'=>$data['question_id'],'result_id'=>$this->result_id,'btn_clr'=>BTNCOLORS[$data['action']],'opt'=>(isset($data['option'])?$data['option']:''),'section_id'=>$exam_id,'opt_id'=>(isset($data['selected_text'])?$data['selected_text']:''),'action'=>$data['action']);
			$submit_json = $this->common_lib->prepare_exam_json($qn_data, $this->result_id,$presentQues);
			$qn_save = $this->home_model->insertQuery('exams_qn_updates',$qn_data);
		}
		$data['submitted'] = isset($submit_json) && !empty($submit_json)?$submit_json:(file_exists('assets/json/exam/'.$this->result_id.'.json')? json_decode(file_get_contents('assets/json/exam/'.$this->result_id.'.json'), TRUE):array());
		if($this->exam_paper!='' && $data['quesNumber']<$data['exam_details'][0]->tq){
			$data['question'] = $this->common_lib->get_question_data($this->exam_paper,$data['quesNumber']);
			$this->load->view('exam-page-data', $data);
		}
		if(isset($data['submit_test']) && $data['submit_test']=='submit_test'){
			
			$this->submit_exam($data,$this->result_id,$exam_id, $this->exam_paper);
		}
	}
	public function submit_exam($data, $result_id, $exam_id, $exam_paper){
		$quuestions = json_decode(file_get_contents('assets/json/questions/'.$exam_paper), TRUE);
		$submitted = $data['submitted'];
		//echo '<pre>';print_r($submitted);echo '</pre>';exit;
		$update_array = array();
		$update_array['result_unattempted'] = $update_array['result_attempted'] = $update_array['result_wrong'] = $update_array['result_total'] = $update_array['result_question'] = $update_array['result_marks'] = 0;
		$update_array['completed_status'] =1;
		$update_array['result_date'] = $update_array['result_submit_date'] = date('Y-m-d H:i:s');
		$update_array['result_question'] = count($quuestions);
		$qnupdate = array();
		foreach ($quuestions as $key => $value) {
			$update_array['result_attempted'] = $update_array['result_attempted'] + ($submitted[$key]['action']!='skip'?1:0);
			$update_array['result_unattempted'] = $update_array['result_unattempted'] + ($submitted[$key]['action']=='skip'?1:0);
			if($value['correct_option']==$submitted[$key]['opt']){
				$update_array['result_marks'] = $update_array['result_marks'] + (isset($value['max_marks']) && $value['max_marks']!=''?$value['max_marks']:1);
			}else{
				$update_array['result_wrong'] = $update_array['result_wrong'] + (isset($value['max_marks']) && $value['max_marks']!=''?$value['max_marks']:1);
			}
		}
		$update_array['result_total'] = $update_array['result_marks'] + $update_array['result_wrong'];
		$where = array('tid'=>$exam_id, 'id'=>$result_id);
		$in = $this->home_model->updateQuery('exams_result', $update_array,$where);
		//$in = $this->home_model->insertQuery('exams_qn_updates', $submitted, 'insert_batch');
		if($in){unlink('assets/json/questions/'.$exam_paper);unlink('assets/json/exam/'.$exam_id.'.json');}
	}
}
