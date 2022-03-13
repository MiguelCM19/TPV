<?php 



include_once("header.php");
include_once("conexion.php");




$query2 ="select foto_producto,  id_producto, productos.nombre, cantidad, descripcion, precio,nombre_categoria
 from productos, categoria  where id_producto =". $_GET["id"] ."
  and productos.categoria = categoria.id_categoria";

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
                            echo '<th>';
                            echo 'Foto';
                           echo ' <img class = w-80 src ='.$columna["foto_producto"].'>';
                           echo ' </th>';
                            echo '<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                               echo ' Nombre';
                                echo '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre'].' </h5>';
                           echo ' </th>';
                           echo ' <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                             echo '   Descripcion';
                            echo '  <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 ">'.$columna['descripcion'].' </h5>';
                            echo '</th>';
                           echo ' <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                               echo ' Categoria';
                               echo ' <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['nombre_categoria'].' </h5>';
                          echo ' </th>';
                            echo '<th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">';
                                echo 'Precio';
                               echo ' <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">'.$columna['precio'].'€</h5>';
                           echo '</th>';
                            echo '<th scope="col" class="relative py-3 px-6>';
                            echo '<button type="button" class="text-white  hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">';
                           echo ' <a href =" modificar.php?id='.$_GET["id"] .'">Modificar producto</a></button>';

                            echo '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <a href="eliminar.php?id='. $_GET["id"] .'">Eliminar producto</a></button>';
                            echo '<button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="popup-modal">';
                           echo ' Toggle modal';
                          echo '</button>';
                          
                          
                          echo '<div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">';
                             echo ' <div class="relative px-4 w-full max-w-md h-full md:h-auto">';
                                 
                                 echo ' <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">';
                                    
                                      echo'<div class="flex justify-end p-2">';
                                         echo' <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">';
                                         echo ' <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>';  
                                         echo' </button>';
                                     echo' </div>';
                                      
                                      echo'<div class="p-6 pt-0 text-center">';
                                         echo ' <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                                          echo'<h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>';
                                         echo ' <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">';
                                           echo' Si, estoy seguro';
                                         echo' </button>';
                                         echo' <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancelar</button>';
                                     echo' </div>';
                                 echo' </div>';
                             echo' </div>';
                         echo' </div>';
                          echo  '</th>';
                       echo '</tr>';
                    echo '</thead>';


    }

include_once("footer.php");

?>



