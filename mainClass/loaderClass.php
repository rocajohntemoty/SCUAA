<?php
	Class loaderClass{
		public function __construct( $controllerClass = null ){
			//schoolController
			$controller	=	explode("Controller",$controllerClass);
			$modelFile	=	$controller[0].".php";
			
			if(file_exists("./models/".$modelFile)){
				require "./models/".$modelFile;
				$model	= new $controller[0]();
				return $model;
			}
		}
		public function views( $file = null , $vars = null ){
			require "./views/".$file.".php";
		}
	}
?>