<?php
    //arreglo multidimencional
    //es un arreglo que contiene otros arreglso como elementos

    //arreglo bidimencional
    $estudiantes = [
        ["juan", 20, "Ingeniero"],
        ["Jessi", 21, "Veterinaria"]
    ];

    echo $estudiantes[0][0]; //nombre
    echo "<br>";
    echo $estudiantes[1][2]; //profecion

    //aregglo multidimencional asociativo

    $productos = [
        "laptop" => [
            "marca" => "hp",
            "precio" => 8000,
            "stock" => 5
        ],
        "mouse" => [
            "marca" => "logi",
            "precio" => 1200,
            "stock" => 20
        ]
    ];
    echo "<hr>";
    //Adquirir el precio de la lap
    echo $productos["laptop"]["precio"];
?>