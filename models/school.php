<?php
	require "./mainClass/dbClass.php";
	
	class school extends dbClass{
		public function __construct(){
			parent::__construct();
		}
		public function showAll(){
			$school	=	$this->db->query("select * from school");
			$school->execute();
			return $school->fetchAll(PDO::FETCH_ASSOC);
		}
		public function create( $data = null ,$file ){
			if($file['logo']['name'] == null || empty($file['logo']['name'])){
					$file['logo']['name']	=	""; // Put default Image
			}else{
				move_uploaded_file($file['logo']['tmp_name'],"./content/img/".$file['logo']['name']);
			}
			
			$sql	=	"insert into school(name,image) values(?,?)";
			$createSchool	=	$this->db->prepare($sql);
			$logs	=	$createSchool->execute(array($data['name'],$file['logo']['name']));
			
			return logs;
		}
		public function update(){
		}
		
		public function delete(){
		}
	}
?>