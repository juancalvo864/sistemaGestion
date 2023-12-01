<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body >
    <?php include('header.php'); ?>
    <main class="body_comentarios">
        <?php
        session_start();
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