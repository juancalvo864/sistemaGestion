<?php 
    session_start();
    include("conexion.php");

    $prod_seleccionado = $_POST['producto'];
    $nombre_nuevo = $_POST['nombre'];
    $codigo_nuevo = $_POST['codigo'];
    $descripcion_nuevo = $_POST['descripcion'];
    
    $nombre_img = $_FILES['imagen']['name'];
    $tamanio_img = $_FILES['imagen']['size'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];

    $destino = 'imagenes/'.$nombre_img;

    if($nombre_img != null){
        if(($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamanio_img > 300000 ){
            header("Location: editar.php?error");
        }else{
            move_uploaded_file($tmp_img,$destino);

            $consulta_actualizacion = "UPDATE articulos SET ";

            if (!empty($nombre_nuevo)) {
                $consulta_actualizacion .= "nombre = '$nombre_nuevo', ";
            }

            if (!empty($codigo_nuevo)) {
                $consulta_actualizacion .= "codigo = '$codigo_nuevo', ";
            }

            if (!empty($nombre_img)) {
                $consulta_actualizacion .= "imagen = '$nombre_img', ";
            }

            if (!empty($descripcion_nuevo)) {
                $consulta_actualizacion .= "descripcion = '$descripcion_nuevo', ";
            }

            // Eliminar la coma extra al final de la consulta
            $consulta_actualizacion = rtrim($consulta_actualizacion, ", ");

            // Agregar la condición WHERE
            $consulta_actualizacion .= " WHERE id = '$prod_seleccionado'";

            mysqli_query($conexion_db, $consulta_actualizacion);

            mysqli_close($conexion_db);

            header("Location:editar.php?ok");
        }
    }else{
            $consulta_actualizacion = "UPDATE articulos SET ";

            if (!empty($nombre_nuevo)) {
                $consulta_actualizacion .= "nombre = '$nombre_nuevo', ";
            }

            if (!empty($codigo_nuevo)) {
                $consulta_actualizacion .= "codigo = '$codigo_nuevo', ";
            }

            if (!empty($descripcion_nuevo)) {
                $consulta_actualizacion .= "descripcion = '$descripcion_nuevo', ";
            }

            $consulta_actualizacion = rtrim($consulta_actualizacion, ", ");

            $consulta_actualizacion .= " WHERE id = '$prod_seleccionado'";

            mysqli_query($conexion_db, $consulta_actualizacion);

            mysqli_close($conexion_db);


        header("Location:editar.php?ok");
    }    

