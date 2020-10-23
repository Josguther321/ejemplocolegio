<?php include("header.php"); //Encabezado de nuestra pagina ?>

<div style="padding-left: 90px; padding-right: 90px; padding-top: 90px;">
    <form action="index.php" method="POST">
        <label for="exampleFormControlInput1">Nombre del libro</label>
        <input type="text" class="form-control" name="txtnombre" placeholder="Libro">

        <label for="exampleFormControlInput1">Paginas</label>
        <input type="number" class="form-control" name="txtpaginas" placeholder="ingrese paginas">

        <label for="exampleFormControlInput1">Descripcion</label>
        <input type="text" class="form-control" name="txtdescripcion" placeholder="ingrese descripcion">
        <br><br>
        <button type="submit" name="insertar" VALUE="insertar" class="btn btn-success">+ Guardar</button>
    </form>
</div>


<?php include("footer.php"); //pie de pagina ?>