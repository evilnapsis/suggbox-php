<?php
class TeamData {
	public static $tablename = "team";


	public function TeamData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into user (name,lastname,email1,email2,phone1,phone2,address1,address2,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->email1\",\"$this->email2\",\"$this->phone1\",\"$this->email2\",\"$this->address1\",\"$this->address2\",$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto TeamData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nick=\"$this->nick\",name=\"$this->name\",mail=\"$this->mail\",image=\"$this->image\",password=\"$this->password\",status_id=".$this->status->id.",usertype_id=".$this->usertype->id.",is_admin=$this->is_admin,is_verified=$this->is_verified,created_at=$this->created_at where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new TeamData());
	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new TeamData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new TeamData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new TeamData());
	}


}

?>