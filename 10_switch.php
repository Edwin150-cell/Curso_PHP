<?php
//switch es una estructura de control multicasos
    $dia = 3;
    switch($dia){
        case 1:
            //codigo o respuesta
            echo "lunes";
            break;
        case 2:
            echo "martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "sabado";
            break;
        case 7:
            echo "domingo";
            break;
        default :
            echo "Numero o dia incorrecto";

    }
?>