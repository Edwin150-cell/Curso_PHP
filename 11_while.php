<?php
//Es una estructura de control de repeticion que se ejecuta mientras su condicion 
//sea verdadera

//como hacer un bucle infinito
/*
while(true){
    echo "hola";
}
*/

//contador numeros
$numero = 1;
while($numero <= 3){
    echo "el numero es $numero";
    echo ("<br>");
    $numero = $numero + 1;
}
echo ("<hr>");

//repetir un mensaje con while 
$veces = 1;
while ($veces < 4){
    echo "$veces . -Hola que tal";
    echo ("<br>");
    $veces ++;
}
?>