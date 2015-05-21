<?php
class projectModel{

	$db;
	function __construct(){
		$db = new mysqli('localhost','root', 'mysql', 'project');
		if($db->connect_error > 0){
		die("unable to connect to db");
}
	}

	public function saveProject(){
		$db->query();
	}
}