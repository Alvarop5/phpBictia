<?php
require('conexion.php');

$id = $_GET['id'];
$sql = "DELETE FROM videojuegos WHERE id='$id'";

mysqli_query($conexion, $sql);

header('location: mostrar.php');

?>