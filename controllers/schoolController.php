<?php

	require './includes/templateClass.php';
	require './mainClass/loaderClass.php';
	
	Class schoolController extends loaderClass
	{
		private $schoolModel	=	"";
		
		public function __construct(){
			$this->schoolModel	=	parent::__construct(__Class__);
		}
		public function index(){
			$school	=	$this->schoolModel->showAll();
			$this->views("school/index",$school);
		}
		public function create(){
			if(isset($_POST['createSchool'])){
				$logs	=	$this->schoolModel->create($_POST, $_FILES);
			}else{ 
				$this->views("school/create");
			}
		}
		public function edit(){
			require "./views/school/edit.php";
		}
		public function delete(){
			require "./views/school/delete.php";
		}
	}
	
	$schoolController	=	new schoolController();
	
	
