<?php
    include("conexion.php");

    $id_articulo = $_GET['id'];
    
    mysqli_query($conexion_db, "DELETE FROM articulos WHERE id = $id_articulo");

    header("Location: vista.php");

