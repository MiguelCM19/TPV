
<?php

include_once ('header.php');

include_once ('conexion.php');






$consulta = "select * from productos";

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
   
    include_once("footer.php");
?>




