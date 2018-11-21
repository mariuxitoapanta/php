<?php
    session_start();
    if (!isset($_SESSION['sesion'])) {
        header('Location:' . 'index.php');
    } else {


        if ($_SESSION['sesion']['Estilo'] == '1') {
            include('head.php');
        } else if ($_SESSION['sesion']['Estilo'] == '2') {
            include('headAltoContraste.php');
        }
    }
?>