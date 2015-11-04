<!DOCTYPE html>
<!--
Escribe un programa que sume, reste, multiplique y divida dos números 
introducidos por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            $resultado = $num1 + $num2; 
            
            echo "La suma de los dos números es $resultado <br><br>";           
            
            $resultado = $num1 - $num2; 
            
            echo "La resta de los dos números es $resultado <br><br>";
            
            $resultado = $num1 * $num2; 
            
            echo "La multiplicación de los dos números es $resultado <br><br>";
            
            $resultado = $num1 / $num2; 
            
            echo "La división de los dos números es $resultado <br><br>";
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca los dos números</legend>
                
                <input type="number" min=0 name="num1"><br>                
                <input type="number" min=0 name="num2"> 
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
