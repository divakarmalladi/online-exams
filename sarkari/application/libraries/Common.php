<?php
class Common {
  
    function get_categories($where=array())
    {   
        $CII =& get_instance();
        $CII->Dbfunctions->tableName='categories';
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
		return $data=$CII->Dbfunctions->getAllRecs();
	
    }
    function get_states($where=array())
    {
       $CII =& get_instance();
        $CII->Dbfunctions->tableName='states';
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
		return $CII->Dbfunctions->getAllRecs();
    }
    function get_subcategories($where=array(),$limit=array())
    {   
        $CII =& get_instance();
        if(!empty($limit)){
            $CII->Dbfunctions->limit_condition=$limit;
        }
        $CII->Dbfunctions->tableName='sub_categories';
        $CII->Dbfunctions->joinType='left';
        $CII->Dbfunctions->joinEqualsTo=array("categories"=>"sub_categories.cid=categories.cid");
        $CII->Dbfunctions->selectFields=array("sub_categories.*","categories.cname");
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
        return $data=$CII->Dbfunctions->executeJoin();
        //  return $CII->Dbfunctions->last_query();

	
    }
    function get_ajaxsubcategories($where=array())
    {   
        $CII =& get_instance();
        $CII->Dbfunctions->tableName='sub_categories';
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
		return $data=$CII->Dbfunctions->getAllRecs();
	   // return $CII->Dbfunctions->last_query();

	
    }
    function get_jsonsubcategories()
    {   
        $CII =& get_instance();
       
        $CII->Dbfunctions->tableName='sub_categories';
        $CII->Dbfunctions->joinType='left';
        $CII->Dbfunctions->joinEqualsTo=array("categories"=>"sub_categories.cid=categories.cid");
        $CII->Dbfunctions->selectFields=array("sub_categories.*","categories.cname");
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
        $data=$CII->Dbfunctions->executeJoin();
        return json_encode($data);
	
    }
    function get_jobtypes($where=array())
    {
       $CII =& get_instance();
        $CII->Dbfunctions->tableName='jobtypes';
        if(!empty($where)){
           $CII->Dbfunctions->whereFields=$where;
       }
		return $CII->Dbfunctions->getAllRecs();
    }
    function get_recordscount($table){
        
        $CII =& get_instance();
        $CII->Dbfunctions->tableName=$table;
        
         return $CII->Dbfunctions->getCount();
    }
    function insertdata($table,$tableFields=array())
    {
       $CII =& get_instance();
        $CII->Dbfunctions->tableName=$table;
        if(!empty($tableFields)){
           $CII->Dbfunctions->tableFields=$tableFields;
       }
         return $CII->Dbfunctions->insertRecord();
        //  return $CII->Dbfunctions->last_query();
    }
    function updatedata($table,$tableFields=array(),$where=array())
    {
       $CII =& get_instance();
        $CII->Dbfunctions->tableName=$table;
        if(!empty($tableFields)){
           $CII->Dbfunctions->tableFields=$tableFields;
       }
       if(!empty($where)){
        $CII->Dbfunctions->whereFields=$where;
    }
         return $CII->Dbfunctions->updateRecord();
        //  return $CII->Dbfunctions->last_query();
    }
    function get_sarkariinfo($where=array(),$limit=array())
    {   
        $CII =& get_instance();
        if(!empty($limit)){
            $CII->Dbfunctions->limit_condition=$limit;
        }
        $join['categories']="sarkari_info.cid=categories.cid";
        $join['sub_categories']="sarkari_info.sc_id=sub_categories.sub_cid";
        $join['states']="sarkari_info.st_id=states.sid";
        $join['jobtypes']="sarkari_info.jt_id=jobtypes.jid";
        $fields=array("sarkari_info.*","categories.cname","sub_categories.sub_categoryname","states.state_name","jobtypes.job_type");
        $CII->Dbfunctions->tableName='sarkari_info';
        $CII->Dbfunctions->joinType='left';
        $CII->Dbfunctions->joinEqualsTo=$join;
        $CII->Dbfunctions->selectFields=$fields;
        if(!empty($where)){
            $CII->Dbfunctions->whereFields=$where;
        }
        return $data=$CII->Dbfunctions->executeJoin();
        //  return $CII->Dbfunctions->last_query();

	
    }
function jobviewurl($jobid)
{ 
if($jobid){
    $where['id']=$jobid;
    $jobdata=$this->get_sarkariinfo($where);
    $title=str_replace(array('/',' '),array('','-'),$jobdata[0]->title);
  return $url= base_url().$title.'/'.$jobdata[0]->id;
}else{return false;}
}
    function pagination(){
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["use_page_numbers"] = TRUE;

        $config['full_tag_open'] = '<nav>
        <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
         
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item firstlink">';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item lastlink">';
        $config['last_tag_close'] = '</li>';
         
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item nextlink">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item prevlink">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item curlink">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item numlink">';
        $config['num_tag_close'] = '</li>';
        return $config;
    }
}

?>