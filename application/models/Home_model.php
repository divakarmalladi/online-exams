<?php
class Home_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
     public function execute_query($query){
        try{
            if($query===false){
                log_message('debug', __FUNCTION__." -> ".mysql_error());
            }else{
                if($query->num_rows()>0){
                return $query->result();
              }
            }
        }catch(Exception $e){
            log_message('error', $e->getMessage());
        }
    }
    public function selectQuery($fileds, $table, $where, $orderby='id', $orderType='desc', $limit=10, $offset=0){
        if($table=='') return false;
        try{
            $query = $this->db->select($fileds)->from($table)->where($where)->order_by($orderby,$orderType)->limit($limit,$offset)->get();
            return $this->execute_query($query);
        }catch(Exception $e){
            log_message('error', $e->getMessage());
        }
    }

    public function insertQuery($table, $data){
        if($table=='') return false;
        try{
            $query = $this->db->insert($table, $data);
            return $insId = $this->db->insert_id();
        }catch(Exception $e){
            log_message('error', $e->getMessage());
        }
    }
	
}
