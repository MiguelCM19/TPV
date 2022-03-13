<?php 


$_SESSION["usuario"] = $_POST["nombre"];
$_SESSION["pass"] = $_POST["pass"];

echo $_SESSION["usuario"];
echo "</br>";
echo $_SESSION["pass"];
echo "</br>";


?>

<a href= "login.php"> Ir al inicio de sesion </a>