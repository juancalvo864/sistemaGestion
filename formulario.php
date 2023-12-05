<?php 
    session_start();
   
    include('header.php')
; ?>
    <main class="body_contact">
        <h1>Formulario de contacto</h1>
        <form action="formulario1.php" method="post" class="form_contact">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="email" name="email" placeholder="Email">
            <textarea name="msj" id="" cols="30" rows="10" placeholder="Deje su mensaje aqui"></textarea>
            <input type="submit" value="Enviar consulta">
            <?php if(isset($_GET['ok'])){
                echo "<p> Mensaje enviado</p>";
            }
            ?>
        </form>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>