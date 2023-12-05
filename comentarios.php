
    <?php 
        session_start();
        include('header.php');

        if (!isset($_SESSION['admin'])) {
            header("Location: index.php");
            exit(); 
        }
    ; ?>
    <main class="body_comentarios">
        <?php
            $archivo = fopen('mensajes.txt', 'r');
            $tamaño = filesize('mensajes.txt');
            $contenido = fread($archivo,$tamaño);
            echo $contenido;

            $lineas = explode('<h5>',$contenido);
            $cantidadLineas = count($lineas);
            echo "cantidad de comentarios:" . $cantidadLineas ;

        ?>
    
    </main>
    <?php include('footer.php'); ?>
</body>
</html>