<?php
    session_start();
    include("conexion.php");

    if (!isset($_SESSION['admin'])) {
        header("Location: index.php");
        exit(); 
    }
    

    $nombre_art = $_POST['nombre'];
    $codigo_art = $_POST['codigo'];
    $descripcion_art = $_POST['descripcion'];

    $nombre_img = $_FILES['imagen']['name'];
    $tamanio_img = $_FILES['imagen']['size'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];

    $destino = 'imagenes/'.$nombre_img;

    if(($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamanio_img > 300000 ){
        header("Location: CARGAR.PHP?error");
    }else{
        move_uploaded_file($tmp_img,$destino);

        mysqli_query($conexion_db, "INSERT INTO articulos VALUES (DEFAULT, '$nombre_art','$codigo_art','$nombre_img','$descripcion_art')" );

        mysqli_close($conexion_db);

        header("Location:home.php?ok");
    }

 


?>
