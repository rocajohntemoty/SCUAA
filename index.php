<?php
	// Change to Switch
	
	if(isset($_GET['school']) && !isset($_GET['create']) &&!isset($_GET['edit'])){
		require 'controllers/schoolController.php';
		$template->header();
		$schoolController->index();
		$template->footer();
	}else if(isset($_GET['school']) && isset($_GET['create'])){
		require 'controllers/schoolController.php';
		$template->header();
		$schoolController->create();
		$template->footer();
	}else if(isset($_GET['school']) && isset($_GET['edit'])){
		require 'controllers/schoolController.php';
		$template->header();
		$schoolController->edit();
		$template->footer();
	}else if(isset($_GET['points']) && !isset($_GET['create']) &&!isset($_GET['edit'])){
		require 'controllers/pointsController.php';
		$template->header();
		$pointsController->index();
		$template->footer();
		
		// For points
	}else if(isset($_GET['points']) && isset($_GET['create'])){
		require 'controllers/pointsController.php';
		$template->header();
		$pointsController->create();
		$template->footer();
		
	}else{
		echo "Redirection is neeaded here!";
	}
	
?>