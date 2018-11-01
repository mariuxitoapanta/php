

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Menú usuario | myAlbum</title>
    <?php
        if (!isset($_COOKIE['sesion'])) {
            header('Location:'.'index.php');
        }else{
            $cookie = json_decode($_COOKIE['sesion'],true);

            if($cookie['Estilo'] == "style"){
                include('head.php');
            }else if($cookie['Estilo'] == "Alto contraste"){
                include('headAltoContraste.php');
            }
        }
    ?>
</head>
<body>
<?php
include('header.php');
?>

<section>
    <div class="split-menu izq-menu">

    </div>
    <div id="background-menu" class="split-menu dcha-menu">
        <div class="margin_menu">
            <h2 style="text-align: left" class="white text_shadow">
                <?php
                    if (isset($_COOKIE['sesion'])) {
                        $cookie = json_decode($_COOKIE['sesion'],true);
                        echo $cookie['usuario'];
                    }
                ?>

            </h2>
            

            <div style="line-height: 1.4em;">
                <a href="">Modificar datos</a><br>
                <a href="">Darse de baja</a><br>
                <a href="">Visualizar albumes</a><br>
                <a href="crearAlbum.php" href="">Crear nuevo album</a><br>
                <a href="solicitarAlbum.php">Solicitar album impreso</a>
            </div>

            <p class="white text_shadow" style="font-size: .7em;"> Última conexión: 
                <?php 
                    if (isset($_COOKIE['sesion'])) {

                        if(isset($_COOKIE['tiempo'])){
                            $cookie = json_decode($_COOKIE['tiempo'],tr);
                            echo $cookie['mday'] . " de " . $cookie['month'] . " de " . $cookie['year'] . " a las " . $cookie['hours'] .":". $cookie['minutes'];
                            $date = json_encode(getdate());
                            setcookie('tiempo',$date,time() + 86400 * 90);

                        }else{
                            echo "Nunca";
                            $date = json_encode(getdate());
                            setcookie('tiempo',$date,time() + 86400 * 90);

                        }
                        
                        
                    }
                ?>
            </p>

        </div>
    </div>
</section>
</body>
</html>