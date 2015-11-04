<!DOCTYPE html>
<!--
Escribe un programa que calcule el área de un rectángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {

            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];
            $areaRectangulo = $lado1 * $lado2;

            echo "El área del rectángulo es $areaRectangulo <br><br>";           
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca los lados</legend>
                
                <input type="number" name="lado1"><br>
                <input type="number" name="lado2"><br>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
