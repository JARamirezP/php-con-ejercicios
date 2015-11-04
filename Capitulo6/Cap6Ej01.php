<!--
Juan Antonio Ramírez Parras

Escribe un programa que calcule la media de un conjunto de números positivos 
introducidos por teclado. A priori, el programa no sabe cuántos números se 
introducirán. El usuario indicará que ha terminado de introducir los datos 
cuando meta un número negativo. Utiliza sesiones.
-->

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 1</title>
    </head>
    <body>
        <?php
        
        $numero = $_POST['numero'];
        
        if($numero > 0) {
            $_SESSION['contador'] ++;
            $_SESSION['suma'] = $_SESSION['suma'] + $numero;
        }
       
        if((!isset($numero)) || ($numero > 0)) {            
        
        ?>        
            <form method="POST">
                Introduce un número, cuando no quiera meter más introduzca uno negativo.<br>
                <input type="number" name="numero" autofocus>
                <input type="submit" value="OK">
            </form>
        
        <?php
        
        } else {
            echo "La media de los números introducidos es <b>" . $_SESSION['suma'] / $_SESSION['contador'] . "</b>";
        }
        
        ?>
    </body>
</html>
