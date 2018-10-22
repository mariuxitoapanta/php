<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbum solicitado | myAlbum</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
    <link rel="alternate stylesheet" type="text/css" href="css/altoContraste.css" title="Alto contraste">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>
<body>
<?php
    include("header.php");
?>

<div id="background-resAlbum" class="background_parallax">
    <section class="col-4 margin_auto padding20">
        <br><br>
        <h2 class="white text_shadow">
            Bienvenido <?php echo $_POST["nombreUsuario"] ?>
        </h2>

        <br><br>

        <p class="white text_shadow">
            <?php
                if($_POST["pass"] == $_POST["pass2"]){
                    echo "Las contraseñas coinciden: " . $_POST["pass"] . "<br>";
                }else{
                    echo "Las contraseñas no coinciden <br>";
                }

                echo "Tu email es: " . $_POST["email"] . "<br>";
                echo "Vives en: " . $_POST["ciudad"] . ", " . $_POST["pais"]; 
            ?>
        </p>
    </section>
</div>

</body>
</html>