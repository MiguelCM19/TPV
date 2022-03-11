<?php 
 include_once('conexion.php');

 $_GET["id"];

$query = "DELETE FROM productos WHERE id_producto =". $_GET['id'];

$resultado = mysqli_query($conexion, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

header("Location:categorias.php");
die();

?>