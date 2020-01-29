<?php

session_start();


$nom=$_SESSION['nombre'];
$ape=$_SESSION['apellido'];

echo "variable de sesion: <br>";
echo "el nombre es: $nom <br> El apellido es: $ape <br>";

echo "<a href='pagina4.php'> Cerrar sesion </a>";

?>