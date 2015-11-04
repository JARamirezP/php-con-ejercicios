<!DOCTYPE html>
<!--
Realiza un conversor de Kb a Mb.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {
            
            $mb =  $_POST['kb'] / 1024; 
            echo "Son $mb mb. <br><br>";            
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca los Kb a convertir</legend>
                
                <input type="number" name="kb" min='0'>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
