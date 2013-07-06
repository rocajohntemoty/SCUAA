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
		public function create($data){
			$sql	=	"insert into points(gold,silver,bronze) values(:gold,:silver,:bronze)";
			$createSchool	=	$this->db->prepare($sql);
			$createSchool->bindParam(":gold",$data['gold'],PDO::PARAM_INT);
			$createSchool->bindParam(":silver",$data['silver'],PDO::PARAM_INT);
			$createSchool->bindParam(":bronze",$data['bronze'],PDO::PARAM_INT);
			$logs	=	$createSchool->execute();
			return logs;
		}
	}