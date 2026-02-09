<?php
    /*
    que es una estructura de control
    -es una estructura que nos ayuda con el flujo de ejecucion de nuestro codigo

    if -> es una estructura de control condicional
    donde si la condicion es verdadera se ejecuta

    su estructura o declaracion es
    if (condicion){
    
    } 
    
    */
    if (true) {
        echo "esta estructura se ejecuto bien";
    }
    echo "<hr>";

    //verificar si un numero es mayor de 10
    $numero = 15;
    if ($numero > 10) {
        # Interpolacion
        echo "El numero $numero es mayor a 10";
    }
    echo "<hr>";

    //verificar si una variable es definida y no esta vacia
    // isset  determina si una variable es declarada o es null
    // De termina si una variable esta vacia
    // ! eso es no
    $texto = "Hola que tal";
    if (isset($texto) && !empty ($texto)) {
        echo "Texto valido: $texto";
    }

    //verificar si una persona tiene acceso
    $Registro = true;
    if ($Registro) {
        echo "Acceso concedido";
    }
?>