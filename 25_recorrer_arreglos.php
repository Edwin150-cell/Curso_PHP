<?php
    //array asociativos
    $persona = [
        "nombre" => "Edwin",
        "edad" => 21,
        "ciudad" => "Mexico",
        "profesion" => "Ingeniero"
    ];

    foreach ($persona as $key => $value) {
        echo $value;
        echo "<br>";
    }

    echo "<hr>";

    foreach ($persona as $key => $value) {
        echo "La llave es $key y el valor es $value";
        echo "<br>";
    }

    echo "<hr>";

    foreach ($persona as $key => $value) {
        if ($value >= 18){
            echo "Es mayor de edad";
        }
        echo "<br>";
    }

    echo "<hr>";

    foreach ($persona as $key => $value) {
        if (is_int($value)){
            echo "El entero es $value";
        }
        echo "<br>";
    }

    //van a validar informacion
?>