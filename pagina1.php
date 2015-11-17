<?php 
//Iniciamos sesión
session_start();

$_SESSION['usuario']="Juan";
$_SESSION['contrasena']="jmateo";
echo "<a href='pagina2.php'>Click aquí para acceder a la página 2</a>";

?>
