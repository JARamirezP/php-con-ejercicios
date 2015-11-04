<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se 
quiere convertir se deberá introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {

            $cantidadEuros = $_POST['cantidadEuros'];
            $convertidoPesetas = $cantidadEuros * 166.386; 
            
            echo "La cantidad en pesetas es $convertidoPesetas ₧</b><br><br>";           
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca la cantidad en €</legend>
                
                <input type="number" min=0 name="cantidadEuros">                
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
