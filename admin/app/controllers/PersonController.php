<?php

class PersonController {
	public $default_layout = "layout";

	public function newAction(){
		$meta = array("title"=>"Hello LB");
		View::render2($this,"person/new",array("meta"=>$meta));
	}

	public function editAction(){
		$meta = array("title"=>"Hello LB");
		View::render2($this,"person/edit",array("meta"=>$meta));
	}

	public function delAction(){
		$person = PersonData::getById($_GET["id"]);
		$person->del();
		Core::redir("./");
	}

	public function addAction(){
		$criteria = new Criteria("person");

		$criteria->insert(array(
			"no"=>"\"$_POST[no]\"",
			"name"=>"\"$_POST[name]\"",
			"lastname"=>"\"$_POST[lastname]\"",
			"job"=>"\"$_POST[job]\"",
			"phone1"=>"\"$_POST[phone1]\"",
			"phone2"=>"\"$_POST[phone2]\"",
			"address1"=>"\"$_POST[address1]\"",
			"address2"=>"\"$_POST[address2]\"",
			"email1"=>"\"$_POST[email1]\"",
			"email2"=>"\"$_POST[email2]\"",
			"team_id"=>"\"$_POST[team_id]\"",
			"category_id"=>"\"$_POST[category_id]\"",
			"created_at"=>"NOW()"
			));
	Core::redir("./?r=team/open&id=$_POST[sucursal_id]");
	}

	public function updateAction(){
		$criteria = new Criteria("person");
		$person=PersonData::getById($_POST["id"]);

		$criteria->update(array(
			"no"=>"\"$_POST[no]\"",
			"name"=>"\"$_POST[name]\"",
			"lastname"=>"\"$_POST[lastname]\"",
			"job"=>"\"$_POST[job]\"",
			"phone1"=>"\"$_POST[phone1]\"",
			"phone2"=>"\"$_POST[phone2]\"",
			"address1"=>"\"$_POST[address1]\"",
			"address2"=>"\"$_POST[address2]\"",
			"email1"=>"\"$_POST[email1]\"",
			"email2"=>"\"$_POST[email2]\"",
			"team_id"=>"\"$_POST[team_id]\"",
			"category_id"=>"\"$_POST[category_id]\""
			),"id=".$_POST["id"]);
		Core::redir("./?r=index/people");
	}	
}


?>