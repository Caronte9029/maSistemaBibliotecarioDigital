<?php
	

	class metodosCrud {
		
		public static function connection (){
			try{
				$connect = new PDO('mysql:localhost=host; dbname=sistemabibliotecario;' , 'root', '');
				return $connect;
			}catch(PDOException $error1){
				echo $error1->getMessage();
			}
		}
	

	}


?>