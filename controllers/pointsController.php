<?php

	require './includes/templateClass.php';
	require './mainClass/loaderClass.php';
	
	Class pointsController  extends loaderClass{
	
		private $pointsModel	=	"";
		
		public function __construct(){
			$this->pointsModel	=	parent::__construct(__Class__);
		}
		public function index(){
			$points	=	$this->pointsModel->showAll();
			$this->views("points/index",$points);
		}
		public function create(){
			if(isset($_POST['createPoints'])){
				echo "asdasd";
			}else{
				$this->views("points/create");
			}
		}
		public function edit(){
		}
		public function delete(){
		}
	}
		$pointsController	=	new pointsController();
?>