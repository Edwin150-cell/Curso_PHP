<?php
    $numeros = [1,2,3,4,5];
    //contador elementos de un arreglo
    echo "<h4>Contar elementos de un arreglo</h4>";
    echo count($numeros);
    echo "<hr>";

    //agregar al final de un arreglo
    array_push($numeros, 6);
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";
    echo "<hr>";

    //agregar al inicio del arreglo
    array_unshift($numeros, 100);
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";
    echo "<hr>";

    //eliminar al final de un arreglo
    $elimino = array_pop($numeros);
    echo $elimino;
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";
    echo "<hr>";

    //eliminar al inicio
    $elinicio = array_shift($numeros);
    echo $elinicio;
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    //verificar si existe una clave o valor
    $personas = [
        "nombre" => "Marco",
        "curso" => "php 8"
    ];

    if(in_array("Marco", $personas)){
        echo "el nombre esta en el arreglo";
    } else {
        echo "No lo encontre";
    }
    echo "<hr>";

    //funciones de oredenamiento
    //orden aacendente

    sort($numeros);
    print_r($numeros);
    echo "<hr>";

    //orden descendente
    rsort($numeros);
    print_r($numeros);
    echo "<hr>";

    //combinar arreglos
    $a = [1,2,3];
    $b = [4,5,6];
    $c = array_merge($a, $b);
    print_r($c);
    echo "<hr>";

     //buscar en un arreglo
    $posicion = array_search(6, $b);
    echo $b[$posicion];
?>