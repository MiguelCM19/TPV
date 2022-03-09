<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.fotos{

height : 200px;
width : 200px

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
productos where categoria = 1";


$resultado = mysqli_query($conexion, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));


while($columna = mysqli_fetch_array($resultado)){
  
  echo   '<div class=" gap-3 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 ">
    <a href="#">
        <img class="fotos" src="'.$columna['foto'].'" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">'.$columna['nombre'].'</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Producto</p>
  
        </a>
    </div>
</div>';

};

?>


