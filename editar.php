<?php 
    session_start();

    if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit(); 
    }
    include('conexion.php');
    include('header.php');
 
;?>
    <main>
        <section class="container_form_editar">
            <h3>Editar articulos</h3>
            <form action="editar_articulos.php" method="post" class="formulario" enctype="multipart/form-data">
                <select name="producto" id="producto">
                    <?php ; 
                        $selectedId = isset($_GET['id']) ? $_GET['id'] : null;
                        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM articulos");
                        while($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
                    ?>               
                        <option value="<?= $selectedId ?? $mostrar_datos['id'] ;?>" <?= ($mostrar_datos['id'] == $selectedId) ? 'selected' : '';?>><?= $mostrar_datos['nombre'];?></option>                 
                    <?php } ?>
                </select>
                <input type="text" name="nombre"  placeholder="Nombre">
                <input type="text" name="codigo" 
                 placeholder="Codigo">
                <input type="file" name="imagen" 
                 placeholder="Imagen"> 
                <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
                <input type="submit" value="Editar articulo">
                <?php 
                    if(isset($_GET['ok'])){
                        echo "<h3> Articulo editado con exito.</h3>";
                    }elseif(isset($_GET['error'])){
                        echo "<h3> El tipo de img seleccionada es incorrecto.</h3>";
                    }
                ?>  
            </form>
        </section>
    </main>
</body>
</html>

