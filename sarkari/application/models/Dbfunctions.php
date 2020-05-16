<?php

class Dbfunctions extends CI_Model {
	
        public $tableName='';
	    public $orderBy=array();
	    public $selectFields=array();
	    public $whereFields=array();
	    public $tableFields=array();
	    public $where_in=array();
		public $limit_condition=array();
		public $joinEqualsTo=array();
		public $joinType='inner';  
		public $dbType='db';
	   public function last_query(){
		   return $this->db->last_query();
	   }
	    public function getAllRecs(){
		   $__result=array();
		   if(!empty($this->tableName)){
			  $this->prepareSelectFields(); 
			  $this->prepareWhere();
			  $this->prepareWhereIn();
			  $this->prepareOrderBy();
			  $this->prepareLimit();
		      $query=$this->db->get($this->tableName);
		      if($query !='' && $query->num_rows() > 0) $__result=$query->result();
		   }
		   $this->cleareGlobalVariables();
		   return  $__result;
		}
		
		public function getSingleRec(){
		   $__result=array();
		   if(!empty($this->tableName)){
			  $this->prepareSelectFields(); 
			  $this->prepareWhere();
			  $this->prepareWhereIn();
			  $this->prepareOrderBy();
			  $query=$this->db->get($this->tableName);
			  if($query !='' && $query->num_rows() > 0) $__result=$query->row();
		   }
		   $this->cleareGlobalVariables();
		   return  $__result;
		}
	    
		public function insertRecord(){
			$bool=false;
			if($this->tableFields !='' && $this->tableName !='') $bool=$this->db->insert($this->tableName,$this->tableFields);
			$this->cleareGlobalVariables();
			return $bool;
	    }
		
		public function insertRecordGetID(){
			$bool=false;
			if($this->tableFields !='' && $this->tableName !=''){
			   $this->db->insert($this->tableName,$this->tableFields);
			   $bool=$this->db->insert_id();
			}
			$this->cleareGlobalVariables();
			return $bool;
	    }
		 
        public function updateRecord(){
		   $bool=false;
		   if($this->tableName !='' && $this->whereFields !='' && $this->tableFields !=''){
			   $this->prepareWhere();
			   $bool=$this->db->update($this->tableName,$this->tableFields); 
			}
			$this->cleareGlobalVariables();
		    return $bool;   
		}
		
		public function deleteRecord(){
		   $bool=false;
		   if(!empty($this->tableName) && !empty($this->whereFields) && is_array($this->whereFields)){
			   $this->prepareWhere();
			   $bool=$this->db->delete($this->tableName); 
			}
			$this->cleareGlobalVariables();
		    return $bool;   
		}
		
	    public function getCount(){
		   $_count=0;
		   if(!empty($this->tableName)){
			  $this->prepareSelectFields(); 
			  $this->prepareWhere();
			  $this->prepareWhereIn();
			  $this->prepareOrderBy();
			  $this->prepareLimit(); 
		      $query=$this->db->get($this->tableName);
		      if($query !='' && $query->num_rows() > 0) $_count=$query->num_rows();
		   }
		   $this->cleareGlobalVariables();
		   return  $_count;
			
	    }
		
		public function executeJoin(){
		  $__result=array();
          if(!empty($this->tableName) && !empty($this->selectFields) && !empty($this->joinEqualsTo) && is_array($this->joinEqualsTo)){
		      $this->prepareSelectFields(); 
			  $this->prepareWhere();
			  $this->prepareLimit();
		      $this->db->from($this->tableName);
			  foreach($this->joinEqualsTo as $key=>$val){
				  $this->db->join($key,$val,$this->joinType);
			  }
			  $query = $this->db->get();
			  if(!empty($query) && $query->num_rows() > 0) $__result=$query->result();	 	 
		  }
		  $this->cleareGlobalVariables();
          return $__result;
        
    }
		
		private function prepareWhere(){
			if(!empty($this->whereFields) && is_array($this->whereFields))
			   $this->db->where($this->whereFields);
		}
		
		private function prepareSelectFields(){
			if(!empty($this->selectFields) && is_array($this->selectFields))
			   $this->db->select($this->selectFields); 
		}
		
		private function prepareWhereIn(){
		   if(!empty($this->where_in) && is_array($this->where_in)){
			   foreach($this->where_in as $key=>$val){
				  $where_in_explode=explode(",",$val);
				  if(!empty($where_in_explode) && is_array($where_in_explode)) {
					 $this->db->where_in($key,$where_in_explode);
				 }
			   }  
		   }
		}
		
		private function prepareOrderBy(){
			if(!empty($this->orderBy) && is_array($this->orderBy)){
			    foreach($this->orderBy as $key=>$val){
					$this->db->order_by($key,$val);
				}
		    }	
		}
		
	    private function prepareLimit(){
			if(!empty($this->limit_condition)){
			   if(count($this->limit_condition)>1){
				   $this->db->limit($this->limit_condition[1],$this->limit_condition[0]);
				}else{
					 $this->db->limit($this->limit_condition[0]);
			    }
			}
		}
		
	    private function cleareGlobalVariables(){
			$this->tableName='';
			$this->orderBy=array();
			$this->where_in=array();
		    $this->whereFields=array();
			$this->tableFields=array();
		    $this->selectFields=array();
			$this->limit_condition=array();
			$this->joinEqualsTo=array();
			$this->joinType='inner';
	   }
	   
	    public function executeQuery($sql_query){
			$_result=array();
		    $query=$this->db->query($sql_query);
			if($query !=NULL && $query->num_rows()>0){
			   $_result=$query->row();
			}
			return $_result;
		}
}