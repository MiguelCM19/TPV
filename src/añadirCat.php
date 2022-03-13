<?php




include_once('header.php');
include_once('conexion.php');
?>

<form class="formulario" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" name="nombre_categoria" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la categoria">
</div>

<!-- foto -->
<input name="userfile" type="file"> 

<button  type="submit" name="enviar">Enviar</button>
<button> <a href="añadir.php" style="color:#FF0000;" >  Volver </button> </a>    </div>
 <?php

include_once('header.php');
include_once('conexion.php');

 if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre_categoria'];

    //fotos
    $foto = $_FILES["userfile"]["name"];
    $ruta = "IMG/".$foto;

    $query = "INSERT INTO categoria  (nombre_categoria, foto)  values ('$nombre_categoria', '$ruta')" ;

    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));
    echo '<script>alert("cambio realizado");window.location = "categorias.php";</script>';
    };
    ?>