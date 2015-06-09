<?php

class TeamController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/index",array("meta"=>$meta));
	}

	public function openAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/open",array("meta"=>$meta));
	}


	public function newAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/new",array("meta"=>$meta));
	}

	public function newcatAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/newcat",array("meta"=>$meta));
	}


	public function newclientAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/newclient",array("meta"=>$meta));
	}


	public function editAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/edit",array("meta"=>$meta));
	}

	public function editcatAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/editcat",array("meta"=>$meta));
	}


	public function addAction(){
		$criteria = new Criteria("team");

		$criteria->insert(array(
			"name"=>"\"$_POST[name]\""
			));
		Core::redir("./?r=index/units");
	}

	public function addcatAction(){
		$criteria = new Criteria("category");

		$criteria->insert(array(
			"name"=>"\"$_POST[name]\""
			));
		Core::redir("./?r=index/categories");
	}


	public function updAction(){
		$criteria = new Criteria("team");

		$criteria->update(array(
			"name"=>"\"$_POST[name]\""
			),"id=".$_POST["id"]);
		Core::redir("./?r=team/edit&id=".$_POST["id"]);
	}	

	public function updcatAction(){
		$criteria = new Criteria("category");

		$criteria->update(array(
			"name"=>"\"$_POST[name]\""
			),"id=".$_POST["id"]);
		Core::redir("./?r=team/editcat&id=".$_POST["id"]);
	}	

}


?>