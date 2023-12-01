<?php include('header.php'); ?>
    <main class="main_login">
        <section class="container_formulario_login">
            <h3>LOGIN</h3>
            <form action="login.php" method="post" class="formulario_login">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" require placeholder="Usuario">
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" require placeholder="Ingrese su contraseña">
                <img src="captcha.php" alt="Captcha" >
                <input type="text" name="textCaptcha" required placeholder="Ingrese captcha">
                <input type="submit" value="Ingresar">
            </form>
        </section>

        <?php
            if(isset($_GET['error'])){
                echo '<h3>Los datos ingresados son incorrectos</h3>';
            }
        ?>
    </main>
    <?php include('footer.php');?>
    
</body>
</html>