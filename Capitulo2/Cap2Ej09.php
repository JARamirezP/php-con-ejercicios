<!DOCTYPE html>
<!--
Escribe un programa que calcule el volumen de un cono mediante la fórmula
V=1/3 de Pi * r2 + h
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {
            
            $volumenCono = (1 / 3) * Math.pi() * pow($_POST['radio'], 2) * $_POST['altura'];

            echo "El volumen del cono es ", round($volumenCono, $precision = 2), " cm<sup>2</sup>. <br><br>";           
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca el radio y la altura para calcular el volumen</legend>
                
                Radio <input type="number" name="radio"><br>
                Altura <input type="number" name="altura"><br>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
