<?php
include_once('header.php');
include_once('conexion.php');

?>

<div class="grid">
<form class="bg-transparent w-2/4 mt-4 justify-self-center " method="POST">

<label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">ID de la Categoria</label>
    <input required type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-black text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 " value="ID" disabled>

    <label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">Nombre</label>
    <input required type="text" name="nombre_categoria" id="small-input" class="block p-2 w-full text-black bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    
    <label class="block my-4 text-sm font-medium text-white dark:text-gray-300" for="user_avatar">Upload image</label>
            <input class="block w-full" name="foto" class = "text-sm text-white bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 aria-describedby="user_avatar_help" id="user_avatar" type="file">
            
    

<?php 
    include_once('conexion.php');
    $query = "SELECT * FROM categoria";

    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));
?>


    <button type="submit" name="send" action="categorias.php" class="text-black font-medium rounded-lg text-sm w-2/4 sm:w-auto px-5 mt-10 border text-center ">Enviar</button>
    
   

</form>

</div>



<?php
if (isset($_POST['send'])) {

    $nombre_categoria = $_POST['nombre_categoria'];
   // $foto = $_POST['foto'];
   

    $query1 = "INSERT INTO categoria (nombre_categoria) VALUES ('$nombre_categoria')";
    $resultado1 = mysqli_query($conexion, $query1 ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

};
?>