<!DOCTYPE html >

<html lang="en" class="font-mono bg-gradient-to-r from-indigo-800 to-fuchsia-900 ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPV Sex Shop Miguel</title>
    <link rel="icon" href="./img/tft.png">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />

    
</head>

<body>
   <!--  menu de la pagina  -->
    <?php



include_once("conexion.php");
session_start();

if (!isset($_SESSION['user'])) {



  $nombre = $_POST['nombre'];

  $pass = $_POST['pass'];

  $_SESSION["user"] = $_POST['nombre'];
  $_SESSION["pass"] = $_POST['pass'];

  $query = "SELECT * FROM empleado WHERE username='$nombre' and pass='$pass'";

  $resultado = mysqli_query($conexion, $query) or die("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

    if(mysqli_num_rows($resultado) > 0){

  }else{
    session_destroy();
    header('Location: '."login.php");
    exit;
  }
}



?>
 
    <nav class="bg-pink-600 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
<div class="container flex flex-wrap justify-between items-center mx-auto">
<a href="#" class="flex items-center">
<img src="IMG/logo.jpg" class="mr-3 h-10 sm:h-10" alt="Flowbite Logo">
<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">¡¡¡SUCK IT!!!</span>
</a>
<button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
<span class="sr-only">Menu principal</span>
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
<div class="hidden w-full md:block md:w-auto" id="mobile-menu">
<ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
<li>
<a href="categorias.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Inicio</a>
</li>

<li>
<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><a href ="categorias.php">Categorias</a></a>
</li>
<li>
<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><a href ="productosLista.php">Productos</a></a>
</li>

<li>
<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><a href ="cliente.php">Clientes mas destacados</a></a>
</li>
<li>
<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><a href ="cliente.php"></a></a>
<?php



echo $_SESSION["user"];

?>
</li>

<li>
<a href="cerrarsesion.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cerrar sesión</a>

</li>
<li>

</li>
<li>

</li>
</ul>
</div>
</div>
</nav>




<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>

<?php
  include_once('footer.php');
?> 