<?php
namespace Model\project;

class ProjectModel{

	public $db;
	function __construct(){
		
		$this->db = new \mysqli('localhost','root', 'mysql', 'project');
		if($this->db->connect_error > 0){
		die("unable to connect to db");
}
	}

	public function saveProject(){
		$query = ' insert into project.p_profile(name, start, end, budget) values("'
			.$_POST['projectName'].'",'
			.$_POST['start'].','
			.$_POST['end'].','
			.$_POST['budget'].')';
		if($this->db->query($query)):
			return true;
		else:
			print $this->db->error;
			return false;
		endif;
	}
}