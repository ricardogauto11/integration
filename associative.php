<?php

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

function upper($course)
{
    echo strtoupper($course) . "<br>";
}

array_walk($courses, 'upper');

// sort($courses); // ordena ascente
// rsort($courses); // ordena descendente 
// ksort($courses); // ordena por valor de key
// krsort($courses); // ordena key descendente

// var_dump(array_slice($courses, 1)); // Muestra a partir del elemento 1
// var_dump(array_chunk($courses, 2)); // Devuelve grupos de arreglos con la cantidad de elementos indicada
// var_dump(array_shift($courses)); // Muestra el primer elemento del array
// var_dump(array_pop($courses)); // Muestra el ultimo elemento del array
// var_dump(array_unshift($courses, 'aws')); // Se agrega un elemento al principio del array
// var_dump(array_push($courses, 'mvc'); // Agrega elemento al final del array
// var_dump(array_flip($courses)); // Intercambia key por value

$wishes = ['devops' => 'aws', 'api' => 'postman', 'frontend' => 'javascript'];

var_dump(array_diff($wishes, $courses));