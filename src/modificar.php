<?php
    include_once('header.php');
    include_once('conexion.php');   

 

    $query = "SELECT * FROM productos WHERE id_producto =". $_GET['id'];  

    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion)); 


    while($rows = mysqli_fetch_array($resultado)){	    

    echo ('
    <div class="grid">
        <form class="bg-transparent w-2/4 mt-4 justify-self-center" method="POST" >   

            <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Client ID</label>
            <input type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-white text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 "  value="'.$rows["id_producto"].'" disabled> 

            <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Name</label>
            <input type="text" name="nombre" required minlength="1" value="'.$rows["nombre"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" > 

            <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Last name</label>
            <input type="text"  name="cantidad" required minlength="1" value="'.$rows["cantidad"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">    

            <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Telephone</label>
            <input type="text"  name="descripcion" required minlength="1"  value="'.$rows["descripcion"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">   

            <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Address</label>
            <input type="text"  name="precio" required minlength="1" value="'.$rows["precio"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">  

            <label class="block my-4 text-sm font-medium text-white dark:text-gray-300" for="user_avatar">Upload image</label>
            <input class="block w-full name="foto" text-sm text-white bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            </select>

            <button type="submit" name="send"  href="productos.php" class="text-white font-medium rounded-lg text-sm w-2/4 sm:w-auto px-5 mt-10 border text-center ">Submit</button>

        </form>
    </div>
     '
        );
}
?>

<?php

if (isset($_POST['send'])) {

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    
    $query = "UPDATE productos SET nombre='$nombre', cantidad=$cantidad, descripcion='$descripcion', precio=$precio WHERE id_producto=". $_GET['id'];
   
    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

}
?>