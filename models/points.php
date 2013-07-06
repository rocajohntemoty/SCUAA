<?php
	require "./mainClass/dbClass.php";
	
	class points extends dbClass{
		public function __construct(){
			parent::__construct();
		}
		public function showAll(){
			$school	=	$this->db->query("select * from points");
			$school->execute();
			return $school->fetchAll(PDO::FETCH_ASSOC);
		}
	}