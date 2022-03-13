<?php



include_once('header.php');
include_once('conexion.php');
?>
 
<form class="formulario" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
  <input type="text" name="descripcion" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
  <input type="text" name="cantidad" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Categoria</label>
  <input type="text" name="categoria" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Precio</label>
  <input type="text" name="precio" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>



<!-- foto -->
<input name="userfile" type="file"> 

<button  type="submit" name="enviar">Enviar</button>
<button> <a href="aÃ±adir.php" style="color:#FF0000;" >  Volver </button> </a>    </div>
 <?php



 if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $cantidad= $_POST['cantidad'];
  $precio = $_POST['precio'];
  $categoria = $_POST['categoria'];


    //fotos
    $foto = $_FILES["userfile"]["name"];
    $ruta = "IMG/".$foto;
    
    $query = "INSERT INTO productos  (nombre, foto_producto, descripcion, cantidad, precio, categoria)  values ('$nombre', '$ruta', '$descripcion',  '$cantidad',  '$precio',  '$categoria' )" ;
   
    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));
    echo '<script>alert("canbio realizado");window.location = "categorias.php";</script>';
    };
    ?>