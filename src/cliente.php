<?php 


include_once("header.php");
include_once("conexion.php");



$query2 ="select * from clientes";

$resultado2 = mysqli_query($conexion, $query2 ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

while($columna = mysqli_fetch_array($resultado2)){	
    
     
          
     echo '<div class="flex flex-col">';
    echo '<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">';
      echo ' <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">';
          echo  '<div class="overflow-hidden shadow-md sm:rounded-lg">';
                echo '<table class="min-w-full">';
                    echo '<thead class="bg-gray-50 dark:bg-gray-700">';
                       echo  '<tr>';
                            
                            echo '<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                               echo ' Nombre';
                                echo '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre'].' </h5>';
                           echo ' </th>';
                           echo ' <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                             echo '   Apellido';
                            echo '  <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 ">'.$columna['apellido'].' </h5>';
                            echo '</th>';
                           echo ' <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                               echo ' Telefono';
                               echo ' <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['telefono'].' </h5>';
                          echo ' </th>';
                            echo '<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                                echo 'Direccion';
                               echo ' <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['direccion'].'</h5>';
                           echo '</th>';
                           
                       echo '</tr>';
                    echo '</thead>';


    }

include_once("footer.php");

?>



