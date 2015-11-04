<!DOCTYPE html>
<!--
Realiza un programa que pida dos números y luego muestre el resultado de su
multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <div id="contenedor">
            <?php

            if(isset($_POST['submit'])) {

                $mult1 = $_POST['mult1'];
                $mult2 = $_POST['mult2'];
                $resultado = $mult1 * $mult2;

                echo "El resultado es $mult1 x $mult2 = <b> $resultado </b><br><br>";           
            }

            ?>

            <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>               
                    <legend>Introduzca datos</legend>

                    <input type="number" name="mult1"><br>
                    <input type="number" name="mult2"><br><br>
                    <input type="submit" name="submit" value="Enviar"><br>
                </fieldset>
            </form>            
        </div>           
    </body>    
</html>
