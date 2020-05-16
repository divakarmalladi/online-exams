<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function login($exam_id='')
	{
		if($this->input->server('REQUEST_METHOD') === 'POST' && $this->input->is_ajax_request()){
			$this->load->library('form_validate');
			$postData = $this->input->post();
			$this->form_validate->postData = $postData;
			$valid = $this->form_validate->postValid();
			if(empty($valid['error'])){
				$info = array('signup_email'=>$valid['data']['signup_email']);
				$user = $this->home_model->selectQuery('id,signup_name,signup_email,signup_password, signup_mobile,last_login', 'exams_signup', $info,'id','desc',1,0);
				if(isset($user[0]->id) && $user[0]->id>0){
					$this->load->library('common_lib');
					$checkPassword = $this->common_lib->check_password($valid['data']['signup_password'], $user[0]->signup_password);
					if($checkPassword){
						$this->session->set_userdata('USERID', $user[0]->id);
						$this->session->set_userdata('USEREMAIL', $user[0]->signup_email);
						$this->session->set_userdata('USERMOBILE', $user[0]->signup_mobile);
						$this->session->set_userdata('LASTLOGIN', $user[0]->last_login);
						$this->session->set_userdata('USERNAME', $user[0]->signup_name);
						$retUrl = 'dashboard';
						if($exam_id!=''){
							$this->load->library('common_lib');
							$encDetails = explode('-', $this->common_lib->decrypt_string($exam_id)); 
							$exam_id = isset($encDetails[0])?$encDetails[0]:0;
							if($exam_id<=0){
								$retUrl = 'dashboard';
							}else{
								$retUrl = $this->common_lib->exam_url($exam_id);
							}
						}
						$valid = array('status'=>200,'message'=>'Login Successfully','retUrl'=>$retUrl);	
					}else{
						$valid = array('status'=>201,'message'=>'Invalid login details');
					}
					
				}else{
					$valid = array('status'=>201,'message'=>'Invalid login details');
				}
			}else{
				$valid = array('status'=>500,'message'=>'Invalid form data', 'data'=>$valid);
			}
			echo json_encode($valid);exit();
		}
		$data['exam_id'] = $exam_id;
		$this->load->view('forms/login', $data);
	}
	public function forgot_password()
	{
		if($this->input->server('REQUEST_METHOD') === 'POST' && $this->input->is_ajax_request()){
			$this->load->library('form_validate');
			$postData = $this->input->post();
			$this->form_validate->postData = $postData;
			$valid = $this->form_validate->postValid();
			if(empty($valid['error'])){
				$info = array('signup_email'=>$valid['data']['signup_email']);
				$user = $this->home_model->selectQuery('id,signup_name,signup_email,signup_password, signup_mobile,last_login', 'exams_signup', $info,'id','desc',1,0);
				if(isset($user[0]->id) && $user[0]->id>0){
					$valid = array('status'=>200,'message'=>'Please check your email (inbox/spam/junk)');	
				}else{
					$valid = array('status'=>201,'message'=>'Email not registered with us');
				}
			}else{
				$valid = array('status'=>500,'message'=>'Invalid form data', 'data'=>$valid);
			}
			echo json_encode($valid);exit();
		}
		$this->load->view('forms/forgot-password');
	}
	public function register()
	{
		$this->load->library('common_lib');
		if($this->input->server('REQUEST_METHOD') === 'POST' && $this->input->is_ajax_request()){
			$this->load->library('form_validate');
			$postData = $this->input->post();
			$this->form_validate->postData = $postData;
			$valid = $this->form_validate->postValid();
			if(empty($valid['error'])){
				$info = array('signup_email'=>$valid['data']['signup_email']);
				$user = $this->home_model->selectQuery('id', 'exams_signup', $info,'id','desc',1,0);
				if(isset($user[0]->id) && $user[0]->id>0){
					$valid = array('status'=>201,'message'=>'Email already exists');
				}else{
					$valid['data']['signup_password'] = $this->common_lib->encrypt_password($valid['data']['signup_password']);
					$valid['data']['signup_status'] = 1; 
					$valid['data']['last_login'] = date('Y-m-d H:i:s');
					$insId = $this->home_model->insertQuery('exams_signup', $valid['data']);
					if($insId>0){
						$this->session->set_userdata('USERID', $insId);
						$this->session->set_userdata('USEREMAIL', $valid['data']['signup_email']);
						$this->session->set_userdata('USERMOBILE', $valid['data']['signup_mobile']);
						$this->session->set_userdata('LASTLOGIN', $valid['data']['last_login']);
						$this->session->set_userdata('USERNAME', $valid['data']['signup_name']);
						$valid = array('status'=>200,'message'=>'Registered successfully');
					}else{
						$valid = array('status'=>201,'message'=>'Please try again');
					}	
				}
				
			}else{
				$valid = array('status'=>500,'message'=>'Invalid form data', 'data'=>$valid);
			}
			echo json_encode($valid);exit();
		}
		
		$data['cities'] = $this->common_lib->get_cities();
		$this->load->view('forms/register', $data);
	}
	public function exam_categories()
	{
		$this->load->library('common_lib');
		$data = array();
		$info = array('exam_parent' => '0','test_parent'=>'0','section_parent'=>'0');
		$data['exams'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description', 'exams_exam_cat', $info,'id','desc');
		$this->load->view('exams-categories', $data);
	}

	public function exam_list($exam_name, $exam_id)
	{
		$this->load->library('common_lib');
		$encDetails = explode('-', $this->common_lib->decrypt_string($exam_id)); 
		$exam_id = isset($encDetails[0])?$encDetails[0]:0;
		if($exam_id<=0){
			redirect('exam-categories');
		}
		$data = array();
		$where = "(exam_parent=$exam_id OR test_parent=$exam_id OR exam_sub_parent=$exam_id) AND section_parent=0";
		$data['list'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description', 'exams_exam_cat', $where,'id','desc',50);
		$data['parent'] = $this->home_model->selectQuery('id,exam_name,created_date,exam_description', 'exams_exam_cat', array('id'=>$exam_id),'id','desc',1);
		$this->load->view('exams-list', $data);
	}

	public function page_not_found()
	{
		$this->load->view('404');
	}
}
