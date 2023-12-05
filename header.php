<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/style.css"/>
    <title>Sistema de administracion</title>
    <link rel="shortcut icon" href="./imagenes/sweeping_7656182.png" type="image/x-icon"/>
</head>
<body>
    <header>
        <div >
            <h1 class="titulo">Articulos de limpieza</h1>
            <h2 class="subtitulo">Sistema de administracion</h2>
        </div>    
        <nav>
            <div class="menu_nav">
                <?php 
                if(!isset($_SESSION['admin'])){
                    echo '<a href="./index.php">Login</a>';
                }else{
                    echo '<a href="./home.php">Carga de articulos</a>';
                    echo '<a href="./comentarios.php">Mensajes</a>';
                    echo '<a href="./editar.php">Editar producto</a>';
                }
                ;?>
                <a href="./vista.php">Ver articulos</a>
                <a href="./formulario.php">Contacto</a>
                <a href="./salir.php">salir</a>
            </div>
        </nav>
    </header>  