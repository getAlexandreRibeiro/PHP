<?php


// Ejercicio 1. mostrar fecha actual
echo 'Ejercicio 1';
echo '<br>';
$fecha = date('F Y h:i:s A');
echo 'La fecha de hoy dia es: ' . $fecha;
echo '<br>';
echo '<br>';


// Ejercicio 2, calcula el área de un circulo de radio 4 cm
echo 'Ejercicio 2';
echo '<br>';
$radio = 4;
echo 'El área del circulo seria: ' . $area = pi() * pow($radio, 2) . ' cm cuadrados';
echo '<br>';
echo '<br>';


// Ejercicio 3, crea un array con los dias de la semana y muestra el ultimo elemento.
echo 'Ejercicio 3';
echo '<br>';
$semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
echo 'El ultimo dia de la semana es: ' . $semana[count($semana) - 1];
echo '<br>';
echo '<br>';


// Ejercicio 4, crea un array de 5 elementos y muestra su suma
echo 'Ejercicio 4';
echo '<br>';
$n = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
echo 'La suma del array es: ' . array_sum($n);
echo '<br>';
echo '<br>';


// Ejercicio 5, El resultado de ordenar de mayor a menor y de menor a mayor un array de 10 números
// enteros que tú elijas.
echo 'Ejercicio 5';
echo '<br>';
echo 'Los numeros del array ordenado es: ' . sort($n);
echo 'Los numeros del array ordenado es: ' . rsort($n);
echo '<br>';
echo '<br>';


// Ejercicio 6, Crea un array asociativo con 3 claves diferentes y llama a una función para que se muestren
// por pantalla.
echo 'Ejercicio 6';
echo '<br>';
$asociativo = array('nombre' => 'Alex', 'lugar' => 'Brasil', 'edad' => '24');
foreach ($asociativo as $asc) {
    echo ($asc) . ' ';
}

echo '<br>';
echo '<br>';


// Ejercicio 7, Crea dos arrays de al menos 4 elementos y que tengan 2 elementos en común.
// Muestra los elementos que tiene en comun y los que no
// No Funcional!
echo 'Ejercicio 7';
echo '<br>';

echo '<br>';
$array1 = array('a','b', 'c', 'd', 'e');
$array2 = array('d', 'e', 'f', 'g', 'h');


$arrayComun = array_intersect_assoc($array1, $array2);
$arrayDiferente = array_diff($array1, $array2) + array_diff($array2, $array1);

foreach ($arrayComun as $val) {
    print($val);
}

foreach ($arrayDiferente as $val) {
    print ($val);
}

echo '<br>';
echo '<br>';


// Ejercicio 8, Crea un script en PHP en el que haya un array de 2 elementos y le añadas 3
// elementos más en otra línea de código. ; Muestra por pantalla el último elemento de la pila.
echo 'Ejercicio 8:';
echo '<br>';

$ejer8 = array("a", "b");
array_push($ejer8, "c", "d", "e");

//print_r($ejer8);

$last = array_pop($ejer8);
print_r($last);




echo '<br>';
echo '<br>';

// Ejercicio 9; Crea un array con 7 nombres diferentes incluido el tuyo y utiliza una función para
// encontrarlo y mostrarlo por pantalla.
echo 'Ejercicio 9';

echo '<br>';
$nombres = array('Pera', 'Naranja', 'Manzana', 'Granada', 'Uva', 'Piña', 'Tomate');

function myScript($nombres, $key)
{
    $dato = array_search($key, $nombres);
    print_r('Encontrado el valor: ' . $nombres[$dato] . ' en la posicion ' . $dato);

}

myScript($nombres, 'Tomate');



echo '<br>';
echo '<br>';
echo '<br>';


// Ejercicio 10, crea dos cadenas de texto, muestralas por pantalla y unirlas en una sola.

echo 'Ejercicio 10';
echo '<br>';
$cadena = "Alexandre";
$cadena2 = 'Ribeiro';

echo '<br>';

$cadena3 = $cadena ." " . $cadena2;
print $cadena3;
echo '<br>';
echo '<br>';


// Ejercicio 11, Crea una variable con una cadena de texto con espacios adicionales y muestra por pantalla
// esa misma cadena eliminando los espacios no necesarios.
echo 'Ejercicio 11';
echo '<br>';

$cadena_mal = " h    o      l  a, me       l        l  a m o ";
echo $cadena_bien = preg_replace('/(?<=\s)\x20|\x20(?=\s)/', ' ', $cadena_mal);
echo '<br>';
echo '<br>';
echo '<br>';

// Ejercicio 12: Crea una variable con la cadena de texto: “Había una vez un programador con un
// ordenador nuevo y una nueva pantalla de 27”...” y haz un script en el que
// busques el número de veces que aparece la cadena de texto “una” y “un” y en qué posición
// se encuentran dentro de la cadena original.
echo 'Ejercicio 12';
echo '<br>';
$finder = 'un';
$finder2 = 'una';
$texto = "habia una vez un programador con un ordenador nuevo y una nueva pantalla de 27'....";


function myScript12($texto14, $key)
{
    echo $texto14;
    echo "<br>";
    if (strstr($texto14, $key)) {
        print 'Tenemos una ' . $key;
        $pos = strpos($texto14, $key);
        echo ' en la posicion: ' . $pos;
    }

}

myscript12($texto, 'un');
echo '<br>';
echo '<br>';

// Ejercicio 13: Crea una variable con la cadena de texto: “Hola, soy (pon aquí tu nombre) y
// soy alumno de DAW 2”. Muestra por pantalla sólo tu nombre obteniéndolo a partir de la
// cadena de texto.
echo 'Ejercicio 13:';
echo '<br>';
$texto3 = 'Hola, soy Alex y soy alumno de DAW 2';

if (strpos($texto3, 'Alex') !== false) {
    $nombre1 = explode(' ', $texto3);
    echo $nombre1[2];
} else {
    echo "No hay";
}
echo '<br>';
echo '<br>';


// Ejercicio 14: Inventa un script que use dos funciones de string y dos de arrays

// Funcion que encuentra la primera coincidencia caracter en una cadena de texto y nos muestra su posicion una vez ordenada
echo 'Ejercicio 14: ';
echo '<br>';
echo '<br>';


function hanoi($n, $o, $d, $a) {
    if ($n == 1) {
        print($o . ' -> ' . $d. '<br>');
    } else {
        hanoi($n-1, $o, $a, $d);
        print ($o . ' -> ' . $d . '<br>');
        hanoi($n-1, $a, $d, $o);
    }
}


hanoi(10, "Origen", "Destino", "Auxiliar");