<?php 
 include_once('conexion.php');


$query = "DELETE  FROM categoria WHERE id_categoria =". $_GET['id'];



$resultado = mysqli_query($conexion, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

header("Location:categorias.php");
die();

?>