<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_lib{
	public function get_cities($city=''){
		$json = json_decode(file_get_contents(APIURL.'assets/json/city.json'), TRUE);
		if(!empty($city)){

		}
		return $json;
	}
	public function encrypt_password($password){
		$options = [
			    'options' => ['cost' => 8],
			    'algo' => PASSWORD_DEFAULT,
			    'hash' => null
			];
		return $password_hash = password_hash($password, $options['algo'], $options['options']);
	}
	public function check_password($password, $hash){
		if (true === password_verify($password, $hash)) {
		    return true;
		}
		return false;
	}
	public function encrypt_string($data){
		$key="key@Question#2019!08";
		$method = "aes-256-cbc";
		$iv = 'jadpjgtbogfpnajt';
		$data = $data.'-'.strtotime('+2 days');
		return $encstring = base64_encode(openssl_encrypt ($data, 'aes-256-cbc', $key, $options = 0,$iv));
	}
	public function decrypt_string($data){
		$key="key@Question#2019!08";
		$method = "aes-256-cbc";
		$iv = 'jadpjgtbogfpnajt';
		$data = base64_decode($data);
		return $decstring = openssl_decrypt ($data, $method, $key, $options = 0,$iv);
	}
	public function exam_url($exam_id){
		$ci = &get_instance();
		$ci->load->model('home_model');
		$exam = $ci->home_model->selectQuery('id,exam_name,created_date,exam_description', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$exm_id = $this->encrypt_string($exam[0]->id);
		$exam_url = 'exam/'.strtolower(str_replace(' ', '-', trim($exam[0]->exam_name))).'/'.$exm_id;
		$exam_url = $ci->session->has_userdata('USERID')?$exam_url:'login/'.$exm_id;
		return $exam_url;
	}
	public function exam_url_details($exam_id, $exam_name){
		$ci = &get_instance();
		$exm_id = $this->encrypt_string($exam_id);
		$exam_url = 'exam/'.strtolower(str_replace(' ', '-', trim($exam_name))).'/'.$exm_id;
		$exam_url = $ci->session->has_userdata('USERID')?$exam_url:'login/'.$exm_id;
		return $exam_url;
	}
	public function check_session($lastSegment=''){
		$ci = &get_instance();
		if(!$ci->session->has_userdata('USERID')){
			redirect('login'.($lastSegment!=''?'/'.$lastSegment:''));
		}
	}
	public function prepare_exam_json($qn_data,$result_id,$questionno){
		if(file_exists('assets/json/exam/'.$result_id.'.json')){
			$result = json_decode(file_get_contents('assets/json/exam/'.$result_id.'.json'), TRUE);
			$result[$questionno] = $qn_data;
		}else{
			$result =array();
			$result[$questionno] = $qn_data;
		}
		$fp = fopen('assets/json/exam/'.$result_id.'.json', 'w');
		fwrite($fp, json_encode($result));
		fclose($fp);
		//$result = json_decode(file_get_contents('assets/json/exam/'.$result_id.'.json'));
		return $result;
	}
	public function prepare_questions_json($exam_id){
		$ci = &get_instance();
		$ci->load->model('home_model');
		$where = "question!='' AND (tid=$exam_id OR pid=$exam_id OR spid=$exam_id OR qpid=$exam_id)";
		$questions = $ci->home_model->selectQuery('id,question,option1,option2,option3,option4,option5,correct_option,qa_date,section_description,max_marks,answer', 'exams_qa', $where,'id','desc',100);
		$filName = '';
		if(!empty($questions)){
			shuffle($questions);
			$filName = time().'_'.$ci->session->has_userdata('USERID').'_'.$exam_id.'.json';
			$ci->session->set_userdata('exam_paper_'.$exam_id,  $filName);
			$ci->session->set_userdata('exam_id',  $exam_id);
			$fp = fopen('assets/json/questions/'.$filName, 'w');
			fwrite($fp, json_encode($questions));
			fclose($fp);	
		}
		return $filName;
	}
	public function get_question_data($exam_paper, $quesNumber=0){
		$json = json_decode(file_get_contents('assets/json/questions/'.$exam_paper));
		return $json[$quesNumber];
	}
	public function check_submitted_data($submitted, $quesNumber, $value){
		$checked = isset($submitted[$quesNumber]) && is_object($submitted[$quesNumber]) && $submitted[$quesNumber]->opt_id==$value?'checked':(isset($submitted[$quesNumber]) && is_array($submitted[$quesNumber]) && $submitted[$quesNumber]['opt_id'] == $value?'checked':'');
		return $checked;
	}
}