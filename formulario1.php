<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $fecha_actual = date("l/m/Y");
        $texto = '<div class="comentContainer">'.
                    '<div class="name_surname_msj">'.
                        "<h3> Nombre: </h3>" . "<p>" . $_POST['nombre'] . "</p>" .
                    "</div>".
                    '<div class="name_surname_msj">'.
                        "<h3> Apellido: </h3>" ."<p>" . $_POST['apellido'] ."</p>" .
                    "</div>".
                    '<div class="name_surname_msj">'.
                        "<h3> Mensaje: </h3>" ."<p>" .$_POST['msj']. "</p>" . 
                    "</div>".
                    "<h5>" . "Fecha del mensaje: ". $fecha_actual . "</h5>".
                 "</div>";

        $archivo = fopen("mensajes.txt", "a");
        fputs($archivo, $texto);

        header("Location:formulario.php?ok");
    ?>
</body>
</html>