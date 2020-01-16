<?php
require('conexion.php');

$id = $_GET['id'];
$sql = "UPDATE nombre FROM videojuegos WHERE id='$id'";

mysqli_query($conexion, $sql);

header('location: cambiar.php');

?>