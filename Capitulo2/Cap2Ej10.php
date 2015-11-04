<!DOCTYPE html>
<!--
Realiza un conversor de Mb a Kb.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {
            
            $kb =  $_POST['mb'] * 1024; 
            echo "Son $kb kb. <br><br>";            
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca los Mb a convertir</legend>
                
                <input type="number" name="mb" min='0'>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
