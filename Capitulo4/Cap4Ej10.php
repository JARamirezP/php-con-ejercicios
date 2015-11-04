<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos 
introducidos por teclado. A priori, el programa no sabe cuántos números se 
introducirán. El usuario indicará que ha terminado de introducir los datos 
cuando meta un número negativo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
        
            $total = $_POST['total'];
            $numero = $_POST['numero'];
            $cuentaNumeros = $_POST['contador'];
        
            if (!isset($numero) || ($numero > 0)) {
                
            $total += $numero;
            $cuentaNumeros++;
            
        ?>
        
            <form method="post"  action="">
                Número 
                <input type="number" name="numero" autofocus="">
                <input type="hidden" name="total" value="<?=$total?>">
                <input type="hidden" name="contador" value="<?=$cuentaNumeros?>">
                <input type="submit" name="submit" value="Enviar">
            </form>
        <?php
            } else {
                $total = $total / ($cuentaNumeros - 1);
                echo "La media de los números es ", $total;
            }
        ?>
    </body>
</html>
