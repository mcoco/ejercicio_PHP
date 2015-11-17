<?php
//mantenemos la sesión abierta y la información del usuario logeado
session_start();

//Mensaje de bienvenida al usuario
echo "Hola ". $_SESSION['usuario'] . ", bienvenido";

?>