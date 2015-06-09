<?php

class BlogController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>"Hello LB");
		$p_criteria = new Criteria("post");
		$this->posts = $p_criteria->getAll();
		View::render($this,"blog/index",array("meta"=>$meta));
	}

	public function newpostAction(){
		$meta = array("title"=>"Hello LB");
		View::render($this,"blog/newpost",array("meta"=>$meta));
	}
	public function editAction(){
		$meta = array("title"=>"Hello LB");
		$p_criteria = new Criteria("post");
		$this->post= $p_criteria->getById($_GET["id"]);
		View::render($this,"blog/edit",array("meta"=>$meta));
	}

	public function addAction(){
		$post = new Criteria("post");
		$is_public = 0;
		if(isset($_POST["is_public"])){ $is_public=1;}
		$post->insert(array(
			"title"=>"\"$_POST[title]\"",
			"content"=>"\"$_POST[content]\"",
			"is_public"=>$is_public,
			"created_at"=>"NOW()"
			));
		Core::redir("./?r=blog/index");
	}

	public function updateAction(){
		$post = new Criteria("post");
		$is_public = 0;
		if(isset($_POST["is_public"])){ $is_public=1;}
		$post->update(array(
			"title"=>"\"$_POST[title]\"",
			"content"=>"\"$_POST[content]\"",
			"is_public"=>$is_public,
			"created_at"=>"NOW()"
			),"id=".$_POST["id"]);

		Core::redir("./?r=blog/index");
	}

	public function deleteAction(){
		$post = new Criteria("post");
		$post->delete("id=".$_GET["id"]);

		Core::redir("./?r=blog/index");
	}


}


?>