<?php

$username = $_POST['usuario'];
$password = $_POST['password'];

$usuarios = ['usuario1', 'usuario2', 'usuario3', 'usuario4', 'usuario5'];
$passwords = ['usuario1', 'usuario2', 'usuario3', 'usuario4', 'usuario5'];

$bd = array_combine($usuarios, $passwords);
$flag = 0;

if (array_key_exists($username, $bd)) {
    $flag = 1;
    $passBD = $bd[$username];
}

if($password == $passBD){
    $flag = 2;
}

$eleccion = rand(1,2);
$css;
if($eleccion==1){
	$css = "style";
}else if($eleccion==2){
	$css = "Alto contraste";
}

$datos = array(
	"usuario" 		 => $username,
	"pass"    		 => $password,
	"tiempo"  		 => getdate(),
	"Estilo" 		 => $css,
);

session_start();

$_SESSION['sesion'] = $datos;




if ($flag == 1 || $flag == 0){
    header('Location: index.php?error');
}
else{

	// Comprobamos si esta marcada la casilla de recuerdame para añadir la cookie
	if($_POST['recuerdame']=="on"){
		setcookie('sesion',json_encode($datos), time() + 86400 * 90);
	}else{
		setcookie('sesion',json_encode($datos), 0);
	}
    header('Location: menu.php');
}