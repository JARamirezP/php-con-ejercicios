<!DOCTYPE html>
<!--
Escribe un programa que calcule el total de una factura a partir de su base
imponible.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {

            echo "El total de la factura es "; 
            echo round($_POST['baseImponible'] * 1.21, $precision = 2), "€. <br><br>";            
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca la base imponible</legend>
                
                Base imponible <input type="number" name="baseImponible" min='0'>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
