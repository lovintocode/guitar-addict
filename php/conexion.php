<?php
	/* 	Clase Conexión 
		PDO y POO, se conecta mediante un json específicado por una "ruta" (Linux o Windows)
	*/
	class Conexion{

		private $conexion;

		function __construct(){
			// Windows path //
			// /Z:/xampp/htdocs/ej13_b/php/config.json //
			// Linux /opt/lampp/htdocs/guitar-addict //
			$path = realpath("/php/config.json");
			$json_data = file_get_contents($path);
			$array = json_decode($json_data, true);
			try{
				$this->conexion = new PDO("mysql:host=".$array['ruta'].";dbname=".$array['dbname']."", "".$array['usr']."","".$array['pwd']."");
				$this->conexion->exec("set character set utf8");				
			}catch(Exception $e){
				die('Error : '.$e->GetMessage());
			}
		}
		
		function getConector(){
			return $this->conexion;
		}
		
		function cerrar(){
			$conexion = null;
		}
	}
?>
