
<?php

include_once ('header.php');
include_once ('footer.php');
include_once ('conexion.php');





$_GET["id"];

$consulta = "select * from productos where categoria=" . $_GET["id"];

$resultado = mysqli_query($conexion, $consulta ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));



    ?>
    <div class="grid overflow-hidden justify-self-center bg-slate-500 grid-cols-5 grid-rows-2 gap-8">
    <?php
        while($columna = mysqli_fetch_array($resultado)){
        echo
            ('<div class="px-12 max-w-sm justify-self-center bg-slate-500 ">
                <a href="#" class="block p-6  rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                    <img class="w-80" src='.$columna['foto'].'>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre'].'</h5>
                </a>
            </div>');
        };
    ?>




