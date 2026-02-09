<?php
    //combinar expresiones booleanas
    
    /*
    -&& (and) -> verdadero si ambos son verdaderos
    -|| (or) -> si almenos uno es verdadero
    -xor -> verdadero si solo uno es verdadero y el otro falso 
    -! ->verdadero si $a es falso
    */
    //print es una funcion
    print(true && true);

    //operadores logicos and
    //mas descriptivo
    var_dump(true && true);
    echo "<hr>";
    var_dump(true && false);
    echo "<hr>";
    var_dump(false && false);
    echo "<hr>";
    var_dump(false && true);
    echo "<hr>";

    //operadores logicos or
    var_dump(true || true); //true
    echo "<hr>";
    var_dump(true || false); //true
    echo "<hr>";
    var_dump(false || false); //false
    echo "<hr>";
    var_dump(false || true); //true
    echo "<hr>";

    //operadores logicos xor
    var_dump(true xor true);
    echo "<hr>";
    var_dump(true xor false);
    echo "<hr>";
    var_dump(false xor false);
    echo "<hr>";
    var_dump(false xor true);
    echo "<hr>";
    
    //operador not o negacion
    var_dump(!true);
    echo "<hr>";
    var_dump(!false);
?>