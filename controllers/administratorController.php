<?php

	require './includes/templateClass.php';
	require './mainClass/loaderClass.php';
	
	Class administratorController 
	{
		/* public function __construct(){
			$loader	=	new loaderClass(__CLASS__);
		} */
		public function __construct()
		{
			echo 1;
		}
		public function index(){
			require "./views/administrator/index.php";
		}
	}
	
	$administratorController	=	new administratorController();
	
	
