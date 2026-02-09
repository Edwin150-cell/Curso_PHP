<?php
//arreglos -> es una estructura de datos qe permite almacenar multiples valorea
//Areglos indexados
//declaracion con array

    $frutas = array("manzana","pera", "uva");
    echo $frutas[1];
    echo "<hr>";

    echo "<pre>";
    var_dump($frutas);
    echo "</pre>";
    echo "<hr>";
//cada elemento que se agrege sera a un index

    $colores = ["rojo", "negro", "blanco"];
    echo "<pre>";
    var_dump($colores);
    echo "</pre>";

//agregar un elemento al final del arreglo
    $colores[] = "gris";
    $colores[1] = "azul";
    $colores[10] = "purpura";
    var_dump($colores);
?>