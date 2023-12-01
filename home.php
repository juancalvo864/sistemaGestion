
<?php include('header.php');?>
    <main>
        <section class="container_cargar_art">
            <h3>Cargar articulo</h3>
            <form action="cargar_articulos.php" method="post" class="formulario" enctype="multipart/form-data">
                <input type="text" name="nombre" required placeholder="Nombre">
                <input type="text" name="codigo" 
                required placeholder="Codigo">
                <input type="file" name="imagen" 
                required placeholder="Imagen"> 
                <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
                <input type="submit" value="Cargar Articulo">
                <?php 
                    if(isset($_GET['ok'])){
                        echo "<h3> Articulo cargado con exito</h3>";
                    }
                ?>
            </form>
        </section>

    </main>
    <?php include('footer.php');?>
</body>
</html>