<?php
    include("conexion.php");
    session_start();

    $nombre_art = $_POST['nombre'];
    $codigo_art = $_POST['codigo'];
    $descripcion_art = $_POST['descripcion'];

    $temporal = $_FILES['imagen']['tmp_name'];
    $nombre = $_FILES['imagen']['name'];
  
    //abrimos la foto original

    if ($_FILES['imagen']['type'] === 'image/jpeg'){
        $orginal = imagecreatefromjpeg($temporal);
    }elseif($_FILES['imagen']['type'] === 'image/png'){
        $orginal = imagecreatefrompng($temporal);
    }else{
        die('no se pudo generar la imagen');
    }

    //Obtener las dimensiones originales de la imagen (alto,ancho).

    $ancho_original = imagesx($orginal);
    $alto_original = imagesy($orginal);

    // Creamos lienzo vacio

    $ancho_nuevo = 700;
    $alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);

    //Se crea la nueva imagen

    $copia = imagecreatetruecolor($alto_nuevo,$ancho_nuevo);

    //Redimensionamos la imagen oriinal

    imagecopyresampled($copia,$orginal,0,0,0,0,$ancho_nuevo,$alto_nuevo,$ancho_original,$alto_original);

    //Exportamos y guardamos la imagen

    imagejpeg($copia,"imagenes/".$nombre,100);


    mysqli_query($conexion_db, "INSERT INTO articulos VALUES (DEFAULT, '$nombre_art','$codigo_art','$nombre','$descripcion_art')" );

    mysqli_close($conexion_db);

    header("Location:index.php?ok");
?>
