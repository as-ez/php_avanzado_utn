<section>
    <?php
    include("conexion.php");
    $consultar_clases = mysqli_query($datos_base, "SELECT * FROM clases ORDER BY fecha");
    while($listar_clases = mysqli_fetch_assoc($consultar_clases)){
    ?>
    <div><h2><?php echo $listar_clases['unidad']; ?></h2></div>
    <div><h4><?php echo $listar_clases['fecha']; ?></h4></div>
     <?php } ?>
<section>