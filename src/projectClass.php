<?php
//Project base class
require_once 'projectModel.php';
use Model\project\ProjectModel as pm;

class Project{

	function __construct(){
		$this->pm = new pm;
	}

	public function createProject(){
		try{
			$status = $this->pm->saveProject();
		}
		catch(exception $e){
			die("something wrong!>".$e);
		}
		return $status;
	}
}