<?php
    $x = 10;
    $y ="10";
    $z = 15;

    //var_dump es una funcion y lo q hace es imprimir todo lo que secede dentro de los 
    // parentecis ()
    
    // (igual (valor)) x es igual a true y tienen la misma estructura
    var_dump($x == $y );
    echo "<br>";

    // (identico(valor y tipo))triple igual esto nos dice que es falso ya q $y es un string 
    var_dump($x === $y );
    echo "<br>";
    
    //(diferente(valor)) 
    var_dump($x != $z );
    echo "<br>";
    
    //(No identico(valor y tipo))
    var_dump($x !== $y );
    echo "<br>";
    
    //(menor que)
    var_dump($x < $z );
    echo "<br>";
    
    //(mayor que)
    var_dump($x > $z );
    echo "<br>";
        
    //(menor o igual que)
    var_dump($x <= $z );
    echo "<br>";    
    
    //(mayor o igual que)
    var_dump($x >= $z );
    echo "<br>";    
    
    //(nave espacial(php 7+))  porque mientras el de la izquierda es mayor que 
    //el de la derecha
    echo 5 <=> 3;
?>