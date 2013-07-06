<?php
	class dbClass{
		public function __construct(){
			// PDO Connection
			$this->db	=	new PDO("mysql:host=localhost;dbname=scuaa","root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}