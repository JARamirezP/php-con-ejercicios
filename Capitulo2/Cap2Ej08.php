<!DOCTYPE html>
<!--
Escribe un programa que calcule el salario semanal de un trabajador en base a 
las horas trabajadas. Se pagarán 12 euros por hora.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php
 
        if(isset($_POST['submit'])) {
            
            echo "Ha trabajado $horasTrabajadas horas. El salario semanal es de "; 
            echo round($_POST['horasTrabajadas'] * 12, $precision = 2), "€. <br><br>";            
        }

        ?>

        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>               
                <legend>Introduzca las horas trabajadas</legend>
                
                <input type="number" name="horasTrabajadas" min='0'>
                <input type="submit" name="submit" value="Enviar"><br>
            </fieldset>
        </form>
        
       
    </body>
</html>
