<!DOCTYPE html>
<html lang="es">
<head>

    <title>Resultados búsqueda | myAlbum</title>
    <?php 
        include("eleccionEstilo.php");
    ?>
</head>
<body>
<?php
include('headerSinLogear.php');
?>

<div id="background-resBuscar" class="background_parallax">
    <section class="col-4 margin_auto padding20">
        <h2 class="white text_shadow">Resultados de la búsqueda</h2>
        <br><br>

        <?php
        $titulo = $_GET['titulo'];
        $desde = $_GET['desde'];
        $hasta = $_GET['hasta'];
        $pais = $_GET['pais'];

        echo "<p style='color:white;'>Nombre: " . $titulo . "</p>";
        echo "<p style='color:white;'>Desde: " . $desde . "</p>";
        echo "<p style='color:white;'>Hasta: " . $hasta . "</p>";
        echo "<p style='color:white;'>País: " . $pais . "</p>";

        ?>
    </section>
</div>

<section class="col-11 margin_auto">
    <br><br>
    <div class="imageGrid">

        <?php 
            require("conexionBD.php");

            $sql = 'SELECT * from FOTOS where Titulo = '.'"'.$titulo.'"' . ' and Fecha >='.'"'.$desde.'"' . ' and Fecha <='.'"'.$hasta.'"' . ' and Pais ='.'"'.$pais.'"';
            
            $resultados=$conexion->query($sql);

            if($conexion->errno){
                echo "<p class='white text_shadow'>No se encontró ninguna foto con ese filtro</p>";
            }

             while($fila=$resultados->fetch_assoc()){

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
                
            }
        ?>

    </div>
</section>
<footer class="footer"></footer>

</body>
</html>