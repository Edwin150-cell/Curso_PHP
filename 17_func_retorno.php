<?php
//funciones con retorno
//funciones con valor de retorno 
//son funciones que retornan un valor facilmente almacenable o para procesar

    function multiplicar ($valor1, $valor2){
        return $valor1 * $valor2;
    }

    $total = multiplicar(82,6);

    if($total < 100){
        echo "$total Es un valor menor a cien";
    }
?>