<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Capítulo 5 - Ejercicio 01</title>
    </head>
    
    <body>
        <?php
        
        $numero = new SplFixedArray(20);
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);
        
        for ($i = 0; $i < 20; $i++) {
            $generado = rand(0, 100); // números aleatorios entre 0 y 100 (ambos incluidos)
            $numero[$i] = $generado;
            $cuadrado[$i] = $generado * $generado;
            $cubo[$i] = $generado * $generado * $generado;
        }
        
        for ($i = 0; $i < 20; $i++) {
            echo $numero[$i], " || ";
            echo $cuadrado[$i], " || ";
            echo $cubo[$i], "<br><br>";
        }
        ?>
    </body>
</html>
