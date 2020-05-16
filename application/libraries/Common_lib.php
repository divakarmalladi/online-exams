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
}