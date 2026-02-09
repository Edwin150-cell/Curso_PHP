<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustado</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php
        $nombre = "Marco";
        echo "<p>Hola $nombre<p>";
    ?>

    <p>Este es un bucle de control div</p>

    <ul>
    <?php
        $usuario = "jesica";
        $edad = 21;
        for ($i=0; $i <= 4; $i++) :
            echo "<li>Elemento $i</li>";
        endfor;
    ?>

    </ul>
    <h2>usuario: <?= $nombre ?></h2>
    <p>Edad: <?= $edad ?></p>
</body>
</html>