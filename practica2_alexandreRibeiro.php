<?php

// Ejercicio 1: Un bucle while que cuente desde 60 hasta 45 y lo muestre por pantalla.

echo 'Ejercicio 1: ';
echo '<br>';

function contar($num)
{
    while ($num >= 45) {
        print   $num . ' : ';
        $num--;
    }
}

contar(60);

echo '<br>';
echo '<br>';
// Ejercicio 2: Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre
// por pantalla el doble del valor de $contador.
echo 'Ejercicio 2:';
echo '<br>';
function doble()
{
    $contador = 1;
    while ($contador <= 5) {
        print_r(2 * $contador . ' : ');
        $contador++;
    }
}

doble();
echo '<br>';


// Ejercicio 3: Un bucle for que cuente desde 60 hasta 45 y lo muestre por pantalla.
echo '<br>';
echo 'Ejercicio 3';
echo '<br>';

function contar2()
{
    for ($i = 60; $i >= 45; $i--) {
        print_r($i . ' : ');
    }
}

contar2();

echo '<br>';
echo '<br>';

// Ejercicio 4: Un bucle for que a partir de una variable $contador que toma valores de 1 a 5, muestre por
// pantalla el doble del valor de $contador y lo muestre por pantalla.

echo 'Ejercicio 4: ';
echo '<br>';


for ($i = 1; $i <= 5; $i++) {
    print $i . ' ->' . $i * 2 . "<br> ";
}


echo '<br>';
echo '<br>';


// Ejercicio 5: Contar de 10 a 200 de 10 en 10.

echo 'Ejercicio 5: ';

echo '<br>';

for ($i = 10; $i <= 200; $i = $i + 10) {
    print ' ' . $i;
}

echo '<br>';
echo '<br>';

// Ejercicio 6: compara dos numeros y devuelva el mayo.

echo 'Ejercicio 6:';

echo '<br>';

function mayor($n1, $n2)
{
    if ($n1 > $n2) {
        print $n1;
    } elseif ($n1 == $n2) {
        print 'Numeros iguales';
    } else {
        print $n2;
    }
}

print mayor(5, 6);

echo '<br>';
echo '<br>';


// Ejercicio 7: Comparar 3 numeros y devolver el menor de ellos.

echo 'Ejercicio 7:';

echo '<br>';

function menor($n1, $n2, $n3)
{
    if ($n1 == $n2 or $n1 == $n3) {
        print  $n1 . ' Toma el mismo valor dos veces ';
    } elseif ($n3 == $n2 or $n3 == $n1) {
        print  $n3 . ' Toma el mismo valor dos veces ';
    } else {
        if ($n1 < $n2 && $n1 < $n3) {
            print $n1;
        } elseif ($n2 < $n1 && $n2 < $n3) {
            print $n2;
        } elseif ($n3 < $n1 && $n3 < $n2) {
            print $n3;
        }
    }
}

print menor(1, 0, 0);


echo '<br>';
echo '<br>';

// Ejercicio 8: Funcion que saque el beneficio de la tabla.

echo 'Ejercicio 8:';
echo '<br>';

function beneficio($ventas)
{
    switch ($ventas) {
        case $ventas <= 1000:
            print $ventas;
            break;
        case $ventas > 1000 && $ventas <= 2000:
            print $ventas * 1.05;
            break;
        case $ventas > 2000 && $ventas <= 3000:
            print $ventas * 1.10;
            break;
        case $ventas > 3000 && $ventas <= 5000:
            print $ventas * 1.15;
            break;
        default:
            print 'Indique un dato válido';
    }
}

print beneficio(1500);

echo '<br>';
echo '<br>';

// Ejercicio 9: Un script que devuelva un número entero dependiendo de la letra introducida al algoritmo,
// es decir, si la entrada es A, la salida debe ser 1.

echo 'Ejercicio 9:';

echo '<br>';

function script1($entrada)
{
    return ord($entrada) - 64;
}


print script1('B');


echo '<br>';
echo '<br>';

// Ejercicio 10: Mostrar los 10 primers numeros de la serie de fibonachi.

echo 'Ejercicio 10:';

echo '<br>';

// $num es la cantidad de numeros de la sucesion que queremos mostrar

function fibonachi($num) // Permite elegir hasta donde mostrar la sucesion
{
    $f1 = 1;
    $f2 = 0;
    for ($i = 0; $i <= $num; $i++) {
        $suma = $f1 + $f2;
        $f1 = $f2;
        $f2 = $suma;
        echo $suma . ' -> ';
    }
    return true;
}

print  fibonachi(10);


echo '<br>';
echo '<br>';

// Ejrcicio 11: suma de todos los numeros entre 0 y 10;

echo 'Ejercicio 11';

echo '<br>';
echo '<br>';


function sumatorio($num)  // Opcion a elegir hasta donde sumar.
{
    $suma = 0;
    for ($i = 0; $i < $num; $i++) {
        $suma = $suma + $i;
    }
    return $suma;
}

print sumatorio(5);


echo '<br>';
echo '<br>';

// Ejercicio 12: Comparar dos arrays y mostrar elementos en comun;

echo 'Ejercicio 12:';


$array1 = array('aa', '11', '34', 'ff', 'mm');

$array2 = array('ff', 'hh', 'mn', '33', '34');


/*function comparar($array1, $array2)
{
    return array_intersect_assoc($array1, $array2);
}*/


function comparar($array1, $array2)
{

    // Comprueba que los elementos pasados son arrays.
    if (!is_array($array1) || !is_array($array2)) {
        return false;
    }

    if (!empty($array1)) { // Este if descarta que este vacio el primer array

        foreach ($array1 as $key => $value) {

            if (!isset($array2[$key])) {
                unset($array1[$key]);
            } else {
                if (serialize($array2[$key]) != serialize($value)) {
                    unset($array1[$key]);
                }
            }

        }

        return $array1;

    } else {
        return array();
    }

}

echo '<br>';

print_r(comparar($array1, $array2));

echo '<br>';
echo '<br>';

// Ejercicio 13: Escribir por pantalla 'TODO OK' hasta 10 veces(contador).


echo 'Ejercicio 13:';
echo '<br>';
function todo_ok($cont)
{
    for ($i = 0; $i < $cont; $i++) {
        print 'Todo Ok ';
        print $i + 1 . " <br>";
    }
}

todo_ok(10);

echo '<br>';
echo '<br>';


// Ejercicio 14: una funcion que haga operaciones de dos numeros dependiendo del operador.

echo 'Ejercicio 14:';
echo '<br>';

function operacion($a, $b, $operador)
{
    if ($operador === '+') {
        print $a + $b;
    } elseif ($operador === '-') {
        print $a - $b;
    } elseif ($operador === '/') {
        print ($a / $b);
    } elseif ($operador === '*') {
        print $a * $b;
    } else {
        print 'Operador no valido';
    }
}

operacion(1, 5, '-');


echo '<br>';
echo '<br>';

// Ejercicio 15: inventa un script con un switch.

echo 'Ejercicio 15:';

echo '<br>';

function operador_sw($a, $b, $operador)
{
    switch ($operador) {
        case ($operador === '+'):
            print $a + $b;
            break;
        case $operador === '-':
            print $a - $b;
            break;

        case $operador === '/':
            print $a / $b;
            break;

        case $operador === '*':
            print  $a * $b;
            break;

        default:
            print 'Operador no valido';
            break;


    }
}

operador_sw(1, 5, '/');


echo '<br>';
echo '<br>';
















