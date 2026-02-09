<?php
// si necesitas al menos una iteracion segura
// y despues una evolucion usa do while
// evalua un codigo y despues una sentencia

//validacion simple
do {
    $respuesta = "no";
    echo "¡Continuar? (si/no): $respuesta";
} while ($respuesta == "si");

echo  "<hr>";

//iteracion garantizada

$contador =1;
do {
    echo "Ejecucion #$contador";
    $contador = $contador + 1; //$contador ++
    echo "<br>";
} while ($contador <= 3);
?>