<?php
include_once('header.php');
include_once('conexion.php');

?>

<div class="grid">
<form class="bg-transparent w-2/4 mt-4 justify-self-center " method="POST">

<label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">ID del producto</label>
    <input required type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-black text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 " value="ID" disabled>

    <label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">Nombre</label>
    <input required type="text" name="nombre" id="small-input" class="block p-2 w-full text-black bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">Cantidad</label>
    <input required type="text" name="cantidad" pattern="[0-9]{1,5}" id="small-input" class="block p-2 w-full text-black bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="small-input" class="block my-4 text-sm font-medium text-black dark:text-gray-300">Precio</label>
    <input required type="text" name="precio" pattern="[0-9]{1,5}" id="small-input" class="block p-2 w-full text-black bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="message" class="block my-4 text-sm font-medium text-black">Descripcion</label>
    <textarea required id="message" name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Escribe la descripción..."></textarea>


<?php 
    include_once('conexion.php');
    $query = "SELECT * FROM categoria";

    $resultado = mysqli_query($conexion, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));
?>
    <label  class="block my-4 text-sm font-medium text-black">Seleccionar categoria</label>
    <select  class="bg-black border border-black text-black text-sm rounded-lg  block w-full p-2.5 dark:bg-black dark:border-black dark:placeholder-black dark:text-black ">
<?php 
    while($rows = mysqli_fetch_array($resultado)){	
    echo ('<option>'.$rows["nombre_categoria"].'</option>');
}
echo "</select>";
?>

    <button type="submit" name="send" action="productos.php" class="text-black font-medium rounded-lg text-sm w-2/4 sm:w-auto px-5 mt-10 border text-center ">Enviar</button>
    
   

</form>

</div>



<?php
if (isset($_POST['send'])) {

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query1 = "INSERT INTO productos (nombre, cantidad, descripcion, precio) VALUES ('$nombre', $cantidad, '$descripcion', $precio)";
    $resultado1 = mysqli_query($conexion, $query1 ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));

};
?>