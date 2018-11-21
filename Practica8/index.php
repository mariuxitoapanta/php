<!DOCTYPE html>
<html lang="es">
<head>

    <title>Inicio | myAlbum</title>
    <?php 
        session_start();
        if (!isset($_SESSION['sesion'])) {
            include('head.php');
        } else {


            if ($_SESSION['sesion']['Estilo'] == '1') {
                include('head.php');
            } else if ($_SESSION['sesion']['Estilo'] == '2') {
                include('headAltoContraste.php');
            }
        }
    ?>
</head>
<body>
<?php
if (isset($_SESSION['sesion'])) {
    include('header.php');
} else {
    include('headerSinLogear.php');
}

?>

<?php

if (isset($_GET["error"]) == true) {
    echo "<h1 style='color:white; text-transform: uppercase; padding: 0.3em; font-size: 1.5em; background-color: #ff2856; text-align:center;'>Error en el login</h1>";
}

?>
<?php


if (!isset($_SESSION['sesion'])) {
    include('loginIndex.php');
} else {
    include('noLogin.php');
}

?>

<section class="col-11 margin_auto">

    <h2 class="white">Últimas fotos</h2>

    <div class="imageGrid">
        <?php 
            require("conexionBD.php");

            $sql = "SELECT * FROM FOTOS";
            $resultados=$conexion->query($sql);

            if($conexion->errno){
                echo "Problemas al establecer conexion";
            }

            //Contamos el numero de fotos que hay para mostrar las 6 ultimas
            $sqlNumFotos = "SELECT count(*) as total FROM FOTOS";
            $resultados2=$conexion->query($sqlNumFotos);
            $data = $resultados2->fetch_assoc();
            $numfotos = $data['total'];

            //TODO Prueba para acceder a todos los datos de golpe
            /*
            $prueba = $resultados->fetch_all(MYSQLI_ASSOC);
            echo $prueba[1]['Fichero'];
            Tambien recordar
            $prueba->num_rows
            */

            while($fila=$resultados->fetch_assoc()){

                //TODO la parte de mostrar las 6 ultimas estaria bien optimizarla de otra manera
                if($numfotos<=6){
                    $id = $fila['IdFoto'];
                    $fichero = $fila['Fichero'];
                    $titulo = $fila['Titulo'];
                    $descripcion = $fila['Descripcion'];
                    $paisBuscar = $fila['Pais'];
                    $sqlPais = 'SELECT * from PAISES where IdPais = '.'"'.$paisBuscar.'"';
                    $pais = $conexion->query($sqlPais);
                    $fecha = $fila['FRegistro'];
                    $paisNom = $pais->fetch_assoc();
                    $paisNom2 = $paisNom['NomPais'];
                    
                    echo "<a href='foto.php?foto=$id'>
                            <div class='foto' style='background-image: url(img/$fichero);'>
                                <div class='titulo_foto'><h2>$titulo</h2>
                                    <div class='info_foto'>$descripcion</div>
                                    <br>
                                    <div class='info_foto'>$paisNom2, $fecha</div>
                                </div>
                            </div>
                        </a>";
                }else{
                    $numfotos--;
                }
                
            }

        ?>
        
    </div>
</section>
<footer class="footer"></footer>

</body>
</html>