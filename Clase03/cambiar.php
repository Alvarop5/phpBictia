<?php
require('conexion.php');


$editar = $_GET['videojuego'];
// $id="SELECT id  FROM videojuegos WHERE nombre='$editar'";

// echo $id;


$sql = "UPDATE videojuegos SET nombre='$editar' WHERE id='id'";

mysqli_query($conexion, $sql);

header('location: mostrar.php');

?>