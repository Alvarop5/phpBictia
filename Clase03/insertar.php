<?php 
    //Solicitamos la conexion a la BD a tráves del método require()
    require('conexion.php'); 

    //vamos a crear una variable que traiga los datos que el usuario envia desde el formulario

    $videojuego = $_GET['videojuego'];
    /*crearemos una variable que se va a encargar de contener la sentencia sql para guardar 
    los datos en la tabla videojuegos de la BD bictia*/

    $sql = "INSERT INTO videojuegos (nombre) VALUES ('$videojuego')";

    //El metodo mysqli_query() se encarga de enviar los datos
    //necesita la conexión y la sentencia sql 
    mysqli_query($conexion, $sql);

    //Direccionamiento de rutas
    header('Location: mostrar.php');

?>