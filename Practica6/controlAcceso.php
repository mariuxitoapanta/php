<?php 

	$name = "";
	$pass = "";
	$errores = array();
	if(isset($_POST["submit"])){
		if(($name == "usuario1" && $pass == "usuario1") || ($name == "usuario2" && $pass == "usuario2") || ($name == "usuario3" && $pass == "usuario3") || ($name == "usuario4" && $pass == "usuario4")){
			
		}else{
			header('location: ' . "album.php");
		}
	}
	
	

?>