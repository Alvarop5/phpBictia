<?php
 // # /* */ para hacer comentarios

 /*TEORIA 
 
    ¿Que es PHP?
    PHP : Hypertext Preprocessor

 */
    
// ARRAYS
$colores = array("Rojo", "Verde", "Azul", "Amarillo");

foreach($colores as $valores){
    echo"$valores <br>";
}
echo count($colores); // longitud de un arreglo
echo "<br>";

// OTRO RECORRIDO DE ARREGLOS
$autos = array("Ferrari", "Lamborghini", "Audi");
$longaArreglo = count($autos);
for ($i = 0; $i < $longaArreglo; $i++){
    echo $autos[$i] . "<br>"; 
}

// ARREGLOS ASOCIATIVOS

$persona = array("Luna" => "18", "Fernando" =>"21", "Fabian L."=> "31");
// $persona['Luna'] = "18"
// $persona['Fernando'] = "21"

//accedemos al arreglo asociativo e imprimimos el valor através de la clave
echo "Luna tiene " . $persona['Luna'] . "años.";
echo "<br>";

// RECORRER UN ARREGLO ASOCIATIVO
foreach ($persona as $nombre => $nombre_edad) {
    echo "clave: " . $nombre . ",valor: " . $nombre_edad . "<br>";
}

//ARREGLOS MULTIDIMENSIONALES
$productos = [
    [
        'nombre'=>'Emapanda',
        'precio'=>1000,
        'cantidad' => 12
    ],
    [
        'nombre' => 'Pedazo de Pizza',
        'precio' => 5000,
        'cantidad' => 5
    ]

];

$total = 0;
foreach($productos as $producto){
    $total += $producto['precio'] * $producto['cantidad'];
    echo $producto['nombre']
    . ": $" . $producto['precio']
    . " x " . $producto['cantidad']
    ."<br>";
}

echo "total: " . $total . "<br>";

//OTRA FORMA

$productos = array
(
    array("Lechona", 50000,2),
    array("Galletas", 600,10),
    array("Gaseosas",1500,7)
);

echo $productos[0][0] . " precio: " . $productos[0][1] . ", cantidad: " . $productos[0][2];

/* 
Crear un arreglo que contenga asociación por clave y valor de peliculas de la siguiente forma
Nombre Pelicula
Director
Año
Personaje principal

Se debe imprimir en el HTML el nombrePelicula como titulo, director negrilla, año subrayado, personaje principal cursiva.
*/

$peliculas = [
    [
        'nombrePelicula' => "El Bromas",
        'Director' => "Todd Phillips",
        'Año' => 2019,
        'Personaje Principal' => "El guason"
    ],

    [
        'nombrePelicula' => "Rapidos y Furiosos 8 ",
        'Director' => "F. Gary Gray",
        'Año' => 2017,
        'Personaje Principal' => "El calvo diesel"
    ],

    [
        'nombrePelicula' => "Toy Story 3",
        'Director' => "Lee Unkrich",
        'Año' => 2010,
        'Personaje Principal' => "Woody"
    ],

    [
        'nombrePelicula' => "Avengers: Infinity War ",
        'Director' => "Anthony Russo",
        'Año' => 2018,
        'Personaje Principal' => "Pantera negra"
    ],

    [
        'nombrePelicula' => "Jumanji: El Siguiente Nivel",
        'Director' => "Jake Kasdan",
        'Año' => 2019,
        'Personaje Principal' => "La roca"
    ]
    
];


foreach ($peliculas as $pelicula => $datosPelicula) {
    echo '<h1>' . $datosPelicula['nombrePelicula'] . '</h1>' . '<br>';
    echo '<b>' . $datosPelicula['Director'] . '</b>' . '<br>';
    echo '<u>' . $datosPelicula['Año'] . '</u>' . '<br>';
    echo '<i>' . $datosPelicula["Personaje Principal"] . '</i>' . '<br>';
    
};








?>