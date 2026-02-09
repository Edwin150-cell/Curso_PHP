<?php
    $coches = ["deportivo", "seddan", "camioneta"];

    for ($i=0; $i < count($coches) ; $i++) { 
        echo "el indice $i esta " . $coches[$i];
        echo "<br>";
    }

    echo "<hr>";

    //recorrer indexados con foreach
    $numeros =[1,4,7,8,9,6,3];
    foreach($numeros as $numero){
        echo $numero;
        echo "<br>";
    }

    echo "<hr>";

    foreach ($numeros as $indice => $valor) {
        echo "El imdice es $indice y el valor es $valor";
        echo "<br>";
    }

?>