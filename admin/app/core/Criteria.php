<?php

/**
* @name criteria
* @brief clase para mejorar el manejo de datos en base de datos
*/
class Criteria extends MagicStuff
{
	public $tablename;
	public $sql;
	
	function Criteria($tbnm = "")
	{
		$this->tablename = $tbnm;
	}

	function insert($data = array()){
		$keys_str ="";
		$values_str ="";
		if(!empty($data)){
			$keys = null;
			$values = null;
			foreach ($data as $key => $value) {
				$keys[] = $key;
				$values[] = $value;
			}
			$keys_str = implode(",", $keys);
			$values_str = implode(",", $values);
		}
		$this->sql = "insert into ".$this->tablename." (".$keys_str.") value (".$values_str.")";
		return Executor::doit($this->sql);
	}

	function update($data=array(), $where){

		$values = array();
		foreach ($data as $key => $value) {
			$values[] = $key."=".$value;
		}
		$this->sql = "update ".$this->tablename." set ".implode(",", $values)." where $where";
		return Executor::doit($this->sql);

	}


	function delete( $where){

		$this->sql = "delete from ".$this->tablename." where $where";
		return Executor::doit($this->sql);

	}

}



?>