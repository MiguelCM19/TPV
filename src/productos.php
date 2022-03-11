
<?php

include_once ('header.php');

include_once ('conexion.php');



$_GET["id"];



$consulta = "select * from productos where categoria =". $_GET["id"];

$resultado = mysqli_query($conexion, $consulta ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));



?>
<div class="grid overflow-hidden justify-self-center bg-slate-500 grid-cols-5 grid-rows-2 gap-8">
<?php
    while($columna = mysqli_fetch_array($resultado)){
        echo'<div class="mt-5 mb-5 px-12 max-w-sm justify-self-center bg-slate-500 ">';
        echo '<a href=detallesproducto.php?id='.$columna["id_producto"]  .' class="block p-6  rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">';
        
        echo     ' <img class="w-80" src='.$columna['foto'].'>';
        echo      '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre'].'</h5>';
        echo  '</a>';
        echo  '</div>';
    };
    echo '<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <a href = "añadir.php"><a href = "añadir.php">Añadir productos</a></a></button>';
    echo '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
    <a href = "añadir.php"><a href = "eliminar.php">Eliminar productos</a></a></button>';
    include_once("footer.php");
?>




