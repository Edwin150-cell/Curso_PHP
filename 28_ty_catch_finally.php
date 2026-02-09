<?php
    //es una estructura de control de errores
    //pereimite ejecutar codigo que puede fallar
    // captura y maneja errores ain romper el programa
    //finally es opcional pero recomendado

    
    
    try {  //ejecutar el problema
        $a = 10;
        $b = 0;
        if ($b == 0) {
            throw new Exception("No se puede dividir entre cero");
        }

        echo $a / $b;
    } catch (\Throwable $th) { //catch es para procesarlo     Throwable es que traes un arreglo de errores o lo que paso
    echo $th->getMessage();
    echo "<hr>";
    }finally{
        echo "operacion finalizada";
    }

    echo "<hr>";
    //validacion de email, este puede venir por formulario html
    try {
        $email = "correo@123.com";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //!filter_var aplica un filtro
            throw new Exception("El correo no es valido");
        }
        echo "Correo valido $email";
    } catch (Exception $th) {
        echo "Error" . $th -> getMessage();
    }
?>