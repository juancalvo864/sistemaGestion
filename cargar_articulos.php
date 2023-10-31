<?php

    $nombre_art = $_POST['nombre'];
    $codigo_art = $_POST['codigo'];
    $imagen_art = $_POST['imagen'];
    $descripcion_art = $_POST['descripcion'];

    include("conexion.php");

    mysqli_query($conexion_db, "INSERT INTO articulos VALUES (DEFAULT, '$nombre_art','$codigo_art','$imagen_art','$descripcion_art')" );

    mysqli_close($conexion_db);

    header("Location:index.php?ok");
?>
