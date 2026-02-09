<?php
    declare (strict_types = 1); //activa tipado estricto

//funciones tipados de datos
// 
    function dividir(float $valor1, float $valor2) : float {
        return $valor1/$valor2;
    }

    echo dividir (10, 2);  //valor a 5
?>