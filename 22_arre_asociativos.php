<?php
//arreglo asociativo -> van a manejar llaves, utilizan claves o (keys), estas son
//personalizadas en un lugar de usar indices

    $persona = array(
        "nombre" => "Edwin",
        "edad" => "25",
        "ciudad" => "CDMX"
    );

    $producto = [
        "nombre" => "Edwin",
        "precio" => "5000",
        "marca" => "lenovo"
    ];

    //acceso
    echo $persona["nombre"];

    //arreglar elementos
    $persona["profecion"] = "ingeniero";
    echo "<pre>";
    var_dump($persona);
    echo "</pre>";
?>