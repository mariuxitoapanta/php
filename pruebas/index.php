<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de prueba PHP</title>
</head>

<style type="text/css">
	.resaltar{
		border-bottom: 1px solid red;
		color:#000;
		font-weight: bold;
		font-size: 24px;
	}	

</style>

<body>
<h1 style="text-align: center;">Pagina de prueba</h1>
<?php
	

// Ejemplo de prints y variables

	/*  
	$nombre = "Ruben";
	$edad = 21;

	print "El nombre de usuario es " . $nombre;
	print "<br>";
	print "El nombre de usuario es $nombre";
	*/

// Ejemplo de llamar funciones desde otros archivos

	/*
	echo "Este es el primer mensaje <br>";

	include ("proporcionaDatos.php");

	echo "Este es el segundo mensaje <br>";
	dameDatos();
	*/

// Ejemplo ámbito de variables

	/*
	$nombre ="Ruben";

	function dameNombre(){
		$nombre = "Maria";
	}

	dameNombre();
	echo $nombre; //Imprime Ruben porque la otra variable $nombre es solo en la funcion


	$edad = 18;

	function cambiarValor(){
		global $edad;
		$edad = 21;
	}

	cambiarValor();
	echo $edad;
	*/

//Variables estaticas

	/*
	function incrementarVariable(){
		static $contador = 0;

		$contador++;

		echo $contador . "<br>";
	}

	incrementarVariable();
	incrementarVariable();
	incrementarVariable();
	incrementarVariable();
	*/

// Strings

	/*
	echo '<p class="resaltar">Esto es un ejemplo de frase</p>';

	$variable1 = "Casa";
	$variable2 = "CASA";

	$resultado = strcmp($variable1,$variable2); //Devuelve 1 si no son iguales y 0 si son iguales

	if($resultado){
		echo "No coinciden";
	}else{
		echo "Coincide";
	}
	*/

// Constantes

	define ("AUTOR","Ruben");

	echo "El autor es: " . AUTOR . " y esta definida en la linea " . __LINE__;

	

?>
	
</body>
</html>