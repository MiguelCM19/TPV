<?php 

include_once("header.php");
include_once("conexion.php");



$query2 ="select id_producto, productos.nombre, cantidad, descripcion, precio,nombre_categoria
 from productos, categoria  where id_producto =". $_GET["id"] ."
  and productos.categoria = categoria.id_categoria";

$resultado2 = mysqli_query($conexion, $query2 ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

while($columna = mysqli_fetch_array($resultado2)){	
    
     
          
     echo '<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md sm:rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nombre
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre'].' </h5>
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Descripcion
                                <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 ">'.$columna['descripcion'].' </h5>
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Categoria
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre_categoria'].' </h5>
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Precio
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['precio'].' </h5>
                            </th>
                            <th scope="col" class="relative py-3 px-6>';
                            echo '<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href =" modificar.php?id='.$_GET["id"] .'">Modificar producto</a></button>';

                            echo '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <a href="eliminar.php?id='. $_GET["id"] .'">Eliminar producto</a></button>';
                          echo  '</th>';
                       echo '</tr>';
                    echo '</thead>';


    }

include_once("footer.php");

?>



