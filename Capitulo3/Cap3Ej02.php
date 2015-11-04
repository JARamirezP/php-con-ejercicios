<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos 
días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de
6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las 
horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            if(isset($_POST['submit'])) {
                if($_POST['hora'] >= 6 &&  $_POST['hora']<= 12) {
                    echo "Buenos días";
                }
                
                if($_POST['hora'] >= 13 &&  $_POST['hora']<= 20) {
                    echo "Buenos tardes";
                }
                
                if($_POST['hora'] >= 21 ||  $_POST['hora']<= 5) {
                    echo "Buenos noches";
                }
            
            }
        ?>
        
        <h4>Introduzca la hora</h4>
        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" min="0" max="24" name="hora">
            <input type="submit" name="submit" value="Enviar">
            
        </form>
        
    </body>
</html>
