<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		  $view_data=array();
	 $view_data['seodata']=json_decode(file_get_contents("sarkariassets/json/seo.json"));
	 $view_data['categories']=$this->common->get_categories();
	 $view_data['states']=$this->common->get_states();
		$this->load->view('admin/adminhome',$view_data);
    }
    public function admin_categories(){
        $view_data['categories']=$this->common->get_categories();
		$this->load->view('admin/admincategories',$view_data);

    }
    public function admin_states(){
        $view_data['states']=$this->common->get_states();
		$this->load->view('admin/adminstates',$view_data);

    }
    public function admin_subcategories(){
        $this->load->library("pagination");
        $config = array();
        $config=$this->common->pagination();
        $config["base_url"] = base_url() . "admin-subcategories";
        $config["total_rows"] = 320;
       
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2)-1 : 0;
        $start=$page*$config["per_page"];
        $limit=array($start,$config["per_page"]);
        $where=array();
        $view_data['subcategories']=$this->common->get_subcategories($where,$limit);
        $view_data["links"] = $this->pagination->create_links();
        $view_data['categories']=$this->common->get_categories();

		$this->load->view('admin/adminsubcategories',$view_data);

    }
    public function ajax_subcategories(){
        $opt='';
        $opt.="<option value=''>Select Sub Cateogry</option>";
        if($this->input->server('REQUEST_METHOD')=='POST'){
            if(isset($_POST['cid']) && is_numeric($_POST['cid']))   { 
                $where['cid']=trim($_POST['cid']);
                $subcategories=$this->common->get_ajaxsubcategories($where);
                foreach($subcategories as $sckay=>$scval){
                    $opt.="<option value='".$scval->sub_cid."'>".$scval->sub_categoryname."</option>";
                }
            }
        }
        echo $opt;exit;
    }
    public function admin_jsonsubcategories(){
        $subcategories= $this->common->get_subcategories();
        
        header("Content-type: application/json"); 
	echo json_encode($subcategories);exit;

    }
    public function create_sarkariinfo(){
        
        if($this->input->server('REQUEST_METHOD')=='POST'){
            $insdata['title']=$this->input->post('title');
            $insdata['cid']=$this->input->post('category');
            $insdata['sc_id']=$this->input->post('subcategory');
            $insdata['st_id']=$this->input->post('states');
            $insdata['jt_id']=$this->input->post('jobtype');
            $insdata['job_desc']=$this->input->post('jobdesc');
            $insdata['status']=$this->input->post('status');
            $this->common->insertdata("sarkari_info",$insdata);
            
        }
        
            $view_data['states']=$this->common->get_states();
            $view_data['subcategories']=$this->common->get_subcategories();
            $view_data['categories']=$this->common->get_categories();
            $view_data['jobtypes']=$this->common->get_jobtypes();
            $this->load->view('admin/create_sarkariinfo',$view_data);

        
    }
    public function edit_sarkariinfo(){
        $id = ($this->uri->segment(2) && is_numeric($this->uri->segment(2))) ? $this->uri->segment(2) : 0;
        $where['id']=$id;
        if($this->input->server('REQUEST_METHOD')=='POST'){
            $insdata['title']=$this->input->post('title');
            $insdata['cid']=$this->input->post('category');
            $insdata['sc_id']=$this->input->post('subcategory');
            $insdata['st_id']=$this->input->post('states');
            $insdata['jt_id']=$this->input->post('jobtype');
            $insdata['job_desc']=$this->input->post('jobdesc');
            $insdata['status']=$this->input->post('status');
            $this->common->updatedata("sarkari_info",$insdata,$where);
            
        }
            $view_data['states']=$this->common->get_states();
            $view_data['subcategories']=$this->common->get_subcategories();
            $view_data['categories']=$this->common->get_categories();
            $view_data['jobtypes']=$this->common->get_jobtypes();
     
            $view_data['jobdata']=$this->common->get_sarkariinfo($where);

            $this->load->view('admin/edit_sarkariinfo',$view_data);

        
    }
    public function sarkariinfo_list(){
        $this->load->library("pagination");
        $config = array();
        $config=$this->common->pagination();
        $config["base_url"] = base_url() . "admin-jobslist";
        $config["total_rows"] = $this->common->get_recordscount("sarkari_info");
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2)-1 : 0;
        $start=$page*$config["per_page"];
        $limit=array($start,$config["per_page"]);
        $where=array();
        $view_data["links"] = $this->pagination->create_links();    
        $view_data['jobslist']=$this->common->get_sarkariinfo($where,$limit);
       // print_r($view_data);exit;
        $this->load->view('admin/jobslist',$view_data);

        
    }
}
