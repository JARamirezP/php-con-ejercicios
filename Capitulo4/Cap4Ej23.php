<!DOCTYPE html>
<!--
Escribe un programa que permita ir introduciendo una serie indeterminada de 
números hasta que la suma de ellos supere el valor 10000. Cuando esto último 
ocurra, se debe mostrar el total acumulado, el contador de los números 
introducidos y la media.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 4 - Ejercicio 23</title>
    </head>
    <body>
        <?php
        
            $numero = $_GET['numero'];
            $contadorNumeros = $_GET['contadorNumeros'];
            $sumaNumeros = $_GET['sumaNumeros'];
        
            if ($sumaNumeros <= 10000) {
                
            $sumaNumeros += $numero;
            $contadorNumeros ++;
        ?>
        
            <form method="get"  action="">
                Número
                <input type="number" name="numero" autofocus="">
                <input type="hidden" name="contadorNumeros" value="<?=$contadorNumeros?>">
                <input type="hidden" name="sumaNumeros" value="<?=$sumaNumeros?>">
                <input type="submit" name="submit" value="Enviar">
            </form>
        <?php
            } else {
                echo "La suma de los ", $contadorNumeros, " números introducidos es de ", $sumaNumeros ,
                     " y la media es ", $sumaNumeros / $contadorNumeros;
            }
        ?>
    </body>
</html>

