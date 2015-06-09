<?php

class IndexController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/index",array("meta"=>$meta));
	}

	public function unitsAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/units",array("meta"=>$meta));
	}

	public function categoriesAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/categories",array("meta"=>$meta));
	}

	public function peopleAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/people",array("meta"=>$meta));
	}

	public function msgsAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/msgs",array("meta"=>$meta));
	}

	public function homeAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		Session::setFlashMsg("mensaje","Hola wey");
		Core::redir("./?r=index/index");
		//View::render($this,"index",array("meta"=>$meta));
	}

	public function view2Action(){
		$meta = array("title"=>".: HOSPITAL :.");
		Session::setFlashMsg("mensaje","Hola wey");
		View::render2($this,"index/index",array("meta"=>$meta));
	}

}


?>