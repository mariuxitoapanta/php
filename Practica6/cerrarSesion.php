<?php 

	if(isset($_COOKIE['sesion'])){
        setcookie('sesion',"", time()-3600);
        header('Location:'.'index.php');
    }

?>