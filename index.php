<?php include("conexion.php"); //Encabezado de nuestra pagina ?>
<?php include("header.php"); //Encabezado de nuestra pagina ?>


<?php

    if(isset($_POST['insertar'])){
        $nombre = $_POST['txtnombre'];
        $paginas = $_POST['txtpaginas'];
        $descripcion = $_POST['txtdescripcion'];

        $insertar = "INSERT INTO libro(nombre,paginas,descripcion) VALUES('".$nombre."',".$paginas.",'".$descripcion."')";
        $consulta = mysqli_query($conn,$insertar);
    }
    if(isset($_GET['codigo'])){
        $id = $_GET['codigo'];
        $eliminar = "DELETE FROM libro WHERE id_libro=".$id;
        $consulta = mysqli_query($conn,$eliminar);

        header('Location: index.php');
    }
    if(isset($_POST['actualizar'])){
        $id= $_POST['txtid'];
        $nombre = $_POST['txtnombre'];
        $paginas = $_POST['txtpaginas'];
        $descripcion = $_POST['txtdescripcion'];
        $actualzar = "UPDATE libro SET nombre='".$nombre."', paginas=".$paginas.", descripcion='".$descripcion."' WHERE id_libro=".$id;

        $consulta = mysqli_query($conn,$actualzar);
        header('Location: index.php');
        
    }
    
?>


<!--Codigo para obtener datos de la BD-->
<?php
    $consulta = "select * from libro";

    $datos = mysqli_query($conn,$consulta);

?>

<div style="padding-left: 90px; padding-right: 90px; padding-top: 90px;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PAGINAS</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $key => $d) { ?>
            <tr>
                <th scope="row"><?php  echo $d['id_libro'];  ?></th>
                <td><?php  echo $d['nombre'];  ?></td>
                <td><?php  echo $d['paginas'];  ?></td>
                <td><?php  echo $d['descripcion'];  ?></td>
                <td>
                    <a href="actualizar.php?codigo=<?php echo $d['id_libro']; ?>">Actualizar</a>
                    |
                    <a href="index.php?codigo=<?php echo $d['id_libro']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<div style="padding-left: 100px;">
    <a href="insertar.php"><button type="button" class="btn btn-success">+ Agregar registro</button> </a>

</div>



<?php include("footer.php"); //pie de pagina ?>