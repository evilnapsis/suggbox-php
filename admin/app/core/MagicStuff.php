<?php

/**
* 
*/
class MagicStuff
{
	public $tablename;
	public $sql;

	function __call($name,$param){
		if(substr($name, 0,5)=="getBy"){
			 $field = strtolower(substr($name, 5,strlen($name)));
			 $this->sql = "select * from ".$this->tablename." where $field=".$param[0]." limit 1";
			return Model::one_object($this->sql);
		}
		else if($name=="getAll"){
			$this->sql = "select * from ".$this->tablename;
			return Model::many_object($this->sql);
		}
		else if($name=="custom_select_one"){
			$this->sql = $param[0];
			return Model::one_object($this->sql);
		}
		else if($name=="custom_select_many"){
			$this->sql = $param[0];
			return Model::many_object($this->sql);
		}
		else if(substr($name, 0,8)=="getAllBy"){
			$field = strtolower(substr($name, 8,strlen($name)));
			$this->sql = "select * from ".$this->tablename." where $field=".$param[0];
			return Model::many_object($this->sql);
		}
		else if(substr($name, 0,7)=="getLike"){
			 $field = strtolower(substr($name, 7,strlen($name)));
			 $this->sql = "select * from ".$this->tablename." where $field like '%".$param[0]."%'";
			return Model::many_object($this->sql);
		}

	}
	
}

?>