<?php 
    session_start();
    
    include('header.php'); 
?>
    <main class="main_vista">
        <section class="container_personajes">
            <?php include('conexion.php'); 
            $consulta_db = mysqli_query($conexion_db, "SELECT * FROM articulos");
            while($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
            ?>
            <div class="box_articulo">
                <h2><?php echo $mostrar_datos['nombre'];?></h2>
                <h3><?php echo "(". $mostrar_datos['codigo'].")";?> </h3>
                <img src="imagenes/<?php echo $mostrar_datos ['imagen']?>" alt="<?php echo $mostrar_datos['nombre']?>">
                <p><?php echo $mostrar_datos['descripcion']; ?></p>
                <a href="eliminar.php?id=<?php echo $mostrar_datos['id'];?>">Eliminar</a>
                <a href="editar.php?id=<?php echo $mostrar_datos['id'];?>">Editar</a>
            </div>
            <?php } ?>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>

