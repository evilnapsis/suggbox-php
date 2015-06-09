<?php

if(!empty($_POST)){
include "admin/app/autoload.php";
include "admin/app/models/TeamData.php";
include "admin/app/models/PersonData.php";

	$criteria = new Criteria("item");
	$criteria->insert(array(
		"fullname"=>"\"$_POST[fullname]\"",
		"phone"=>"\"$_POST[phone]\"",
		"address"=>"\"$_POST[address]\"",
		"kind"=>"\"$_POST[kind]\"",
		"team_id"=>"\"$_POST[team_id]\"",
		"msg"=>"\"$_POST[msg]\"",
		"created_at"=>"NOW()"
		));
	print "<script>alert(\"Mensaje enviado exitosamente.\");</script>";
	Core::redir("./");

}

?>
