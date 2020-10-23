<?php include("conexion.php"); //Conexion ?>


<?php include("header.php");
    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
        $obtener = "SELECT * FROM libro WHERE id_libro=".$codigo;
        $datos = mysqli_query($conn,$obtener);

         echo $codigo;
    }
       
  ?>


<?php foreach($datos as $key => $d) { ?>
<div style="padding-left: 90px; padding-right: 90px; padding-top: 90px;">
    <form action="index.php" method="POST">
        <label for="exampleFormControlInput1">Id</label>
        <input type="text" value="<?php echo $d['id_libro']?>" class="form-control" name="txtid" placeholder="txtid">

        <label for="exampleFormControlInput1">Nombre del libro</label>
        <input type="text" value="<?php echo $d['nombre']?>" class="form-control" name="txtnombre" placeholder="Libro">

        <label for="exampleFormControlInput1">Paginas</label>
        <input type="number" value="<?php echo $d['paginas']?>" class="form-control" name="txtpaginas"
            placeholder="ingrese paginas">

        <label for="exampleFormControlInput1">Descripcion</label>
        <input type="text" value="<?php echo $d['descripcion']?>" class="form-control" name="txtdescripcion"
            placeholder="ingrese descripcion">
        <br><br>
        <button type="submit" name="actualizar" VALUE="actualizar" class="btn btn-success">+ Guardar</button>
    </form>
</div>
<?php }?>
<?php include("footer.php"); //pie de pagina ?>