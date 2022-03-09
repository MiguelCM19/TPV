<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.fotos{

height : 350px;
width : 350px

}

    </style>
</head>
<body>
    
</body>
</html>
<?php

include_once ('header.php');
include_once ('footer.php');
include_once ('conexion.php');





$query = "select 
* 
from
categoria";


$resultado = mysqli_query($conexion, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));


while($columna = mysqli_fetch_array($resultado)){


echo '<div class = "container">
        <div class = "grid grid-cols-3">
        <div> <img class="fotos" src="'.$columna['foto'].'" /></div>
        <div><h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$columna['nombre'].'</h5></div>
        <div>Categoria</div>
     </div>';

};

?>


