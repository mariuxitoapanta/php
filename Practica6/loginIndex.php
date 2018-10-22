<?php 

    
	echo '<div id="background-index-top" class="background_parallax">
    <section class="col-4 margin_auto padding20">
        <h2 class="white text_shadow">Iniciar sesión</h2>
        <form method="POST" action="controlAcceso.php">
            
            <label class="label_blanco text_shadow" for="usuario">Nombre de usuario</label>
            <input type="text" placeholder="Introduce tu usuario" name="nombreUsuario" required>
            <br><br>
            <label class="label_blanco text_shadow" for="pass">Contraseña</label>
            <input id="input_pass_login" type="password" placeholder="Introduce tu password" name="pass" required>

            <button type="submit" style="cursor:pointer;" name="submit">Iniciar sesión</button>
            <div class="row">

                <div style="width:30%;">
                    <div style="float: left;margin-right: 5px">
                        <input type="checkbox" id="recuerdame" style="display:none"/>
                        <label for="recuerdame" class="toggle"><span></span></label>
                    </div>
                    <label class="fontSize white text_shadow col-3" style="float: left">Recuerdame</label>
                </div>

                <div class="fontSize white text_shadow col-7" style="float: right;">¿Todavía no tienes cuenta? <a
                        href="registro.php">Registrate aquí</a></div>
            </div>

        </form>

        
    </section>
</div>';

    


?>