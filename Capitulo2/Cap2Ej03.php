<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere 
convertir se deberá introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {

            $cantidadPesetas = $_POST['cantidadPesetas'];
            $convertidoEuros = $cantidadPesetas / 166.386; 
            
            echo "La cantidad en pesetas es ", round($convertidoEuros, $precision=2), "€</b><br><br>";           
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca la cantidad en ₧</legend>
                
                <input type="number" min=0 name="cantidadPesetas">                
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>

