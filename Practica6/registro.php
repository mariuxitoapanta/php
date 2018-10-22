<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuario | myAlbum</title>
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

<div id="background-registro" class="background_parallax">
    <section class="col-4 margin_auto padding20">
        <h2 class="white text_shadow">Registro de usuario</h2>
        <form action="resRegistro.php" method="POST">

            <label class="label_blanco text_shadow" for="usuario">Nombre de usuario</label>
            <input type="text" placeholder="Usuario1" name="nombreUsuario" required>
            <br><br>


            <div class="row">
                <div style="float:left;padding: 0 4% 0 0%;" class="col-6">
                    <label>
                        <label class="label_blanco text_shadow">Contraseña</label>
                        <input type="password" placeholder="Introduce tu pass" name="pass" style="width: 100%" required></label>
                </div>
                <div style="float:left;" class="col-6 top_none">
                    <br id="br_none">
                    <label>
                        <label style="float:left;" class="label_blanco text_shadow">Repetir contraseña</label>
                        <input type="password" placeholder="Vuelve a introducirla" name="pass2" style="width: 100%" required></label>
                </div>
            </div>
            <br>


            <label class="label_blanco text_shadow" for="email">Correo electrónico</label>
            <input type="email" placeholder="usuario1@myalbum.com" name="email" required>
            <br><br>

            <div class="row">
                <div style="float:left; padding: 0 4% 0 0%;" class="col-6">
                    <label>
                        <label class="label_blanco text_shadow">Ciudad</label>
                        <input type="text" placeholder="Alicante" name="ciudad" style="width: 100%" required></label>
                </div>
                <div style="float:left;" class="col-6">
                    <br id="br_none">
                    <label class="label_blanco text_shadow">País</label>
                    <select name="pais">
                        <option value="pais1">País 1</option>
                        <option value="pais2">País 2</option>
                        <option value="pais3">País 3</option>
                        <option value="pais4">País 4</option>
                    </select>
                </div>
            </div>
            <br id="br_none">
            
            <button type="submit" style="cursor:pointer;">Registrarse</button>


        </form>
    </section>
</div>
</body>
</html>