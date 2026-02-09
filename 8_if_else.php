<?php
    // if else -> si no es verdadero entonces hacemos esto

    //verificar si un numero es positivo o negativo
    $numero = -5;
    if ($numero >= 0) {
        echo "Tenemos un positivo en cero y es $numero";
    } else {
        echo "El numero $numero es negativo";
    }
    echo "<hr>";

    //verificar si un usuario esta logeado
    $usuario = false;
    if ($usuario) {
        echo "Bienvenido";
    } else {
        echo "por favor inicia secion";
    }
    
?>