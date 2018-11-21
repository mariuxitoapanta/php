<?php
    require("conexionBD.php");

    
    $username = $_POST['usuario'];
    $password = $_POST['password'];
    /*
    $usuarios = ['usuario1', 'usuario2', 'usuario3', 'usuario4', 'usuario5'];
    $passwords = ['usuario1', 'usuario2', 'usuario3', 'usuario4', 'usuario5'];

    $bd = array_combine($usuarios, $passwords);
    $flag = 0;

    if (array_key_exists($username, $bd)) {
        $flag = 1;
        $passBD = $bd[$username];
    }

    if ($password == $passBD) {
        $flag = 2;
    }

    if ($username == 'usuario1' || $username == 'usuario2' || $username == 'usuario3') {
        $css = "style";
    } else {
        $css = "Alto contraste";
    }
    */

    $sql = 'SELECT * FROM USUARIOS where NomUsuario="'.$username.'"'.' and Clave="'.$password.'"';
    echo $sql;
    $resultados = $conexion->query($sql);

    if($resultados->num_rows>0){
        $datosUsu = $resultados->fetch_all(MYSQLI_ASSOC);


        $datos = array(
            "IdUsuario" => $datosUsu[0]['IdUsuario'],
            "usuario" => $datosUsu[0]['NomUsuario'],
            "pass" => $datosUsu[0]['Clave'],
            "tiempo" => getdate(),
            "Estilo" => $datosUsu[0]['Estilo'],
        );
        // Comprobamos si esta marcada la casilla de recuerdame para añadir la cookie
        
        if ($_POST['recuerdame'] == "on") {
            session_start();
            $_SESSION['sesion'] = $datos;

        } else {
            session_start();
            $_SESSION['sesion'] = $datos;
        }
        header('Location: menu.php');
    }else{
        header('Location: index.php?error');
        
    }

    

    /*
    if ($flag == 1 || $flag == 0) {
        header('Location: index.php?error');
    } else {

        // Comprobamos si esta marcada la casilla de recuerdame para añadir la cookie
        if ($_POST['recuerdame'] == "on") {
            session_start();
            $_SESSION['sesion'] = $datos;

        } else {
            session_start();
            $_SESSION['sesion'] = $datos;
        }
        header('Location: menu.php');
    }
    */

?>