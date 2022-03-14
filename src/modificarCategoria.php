<?php


    include_once('header.php');
    include_once('conexion.php');   

         $_GET["id"];

    $query = "SELECT * FROM categoria WHERE id_categoria =". $_GET['id'];  

    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion)); 


    while($rows = mysqli_fetch_array($resultado)){	    

    echo ('
    <div class="grid">
        <form class="bg-transparent w-2/4 mt-4 justify-self-center" method="POST" >   

            <label for="small-input" class="block my-4 text-sm font-medium text-black  dark:text-gray-300">ID de la categoria</label>
            <input type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-black  text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 "  value="'.$rows["id_categoria"].'" disabled> 

            <label for="small-input" class="block my-4 text-sm font-medium text-black  dark:text-gray-300">Nombre</label>
            <input type="text" name="nombre" required minlength="1" value="'.$rows["nombre_categoria"].'" id="small-input" class="block p-2 w-full text-black  bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" > 

            
            </select>

            <button type="submit" name="send"  href="categorias.php" class="text-black e font-medium rounded-lg text-sm w-2/4 sm:w-auto px-5 mt-10 border text-center ">Enviar</button>

        </form>
    </div>
     '
        );
}
?>

<?php

if (isset($_POST['send'])) {

    $nombre = $_POST['nombre'];
    
    
    $query = "UPDATE categoria SET nombre_categoria='$nombre' WHERE id_categoria=". $_GET['id'];
   
    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));
    echo '<script>window.location = "categorias.php";</script>';
}
?>