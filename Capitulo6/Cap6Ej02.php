<!--
Juan Antonio Ramírez Parras

Realiza un programa que pida números hasta que se introduzca un número negativo 
y nos diga cuantos números se han introducido, la media de los impares y el 
mayor de los pares. El número negativo sólo se utiliza para indicar el final de 
la introducción de datos pero no se incluye en el cómputo. Utiliza sesiones.
-->

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 2</title>
    </head>
    <body>
        <?php
        $numero = $_POST['numero'];
        
        if($numero > 0) {
            $_SESSION['contador'] ++;
            
            if($numero % 2 != 0) {
                $_SESSION['contadorImpares'] ++;
                $_SESSION['sumaImpares'] = $_SESSION['sumaImpares'] + $numero;                                
            }
            
            if($numero % 2 == 0) {                
                $_SESSION['mayorPares'] = 0;
               
                if($numero > $_SESSION['mayorPares']) {
                    $_SESSION['mayorPares'] = $numero;
                }
            }            
        }
        
        if((!isset($numero)) || ($numero > 0)) {            
        
        ?>
        
            <form method="POST">
                Introduzca números, cuando no quiera meter más introduzca uno negativo.<br>
                <input type="number" name="numero" autofocus>
                <input type="submit" value="OK">
            </form>
        
        <?php
        
        }  else {
            echo "Ha introducido <b>" . $_SESSION['contador'] . "</b> números.<br>";
            echo "La media de los números impares es <b>" . $_SESSION['sumaImpares'] / $_SESSION['contadorImpares'] . "</b><br>";
            echo "El mayor de los números pares es <b>" . $_SESSION['mayorPares'] . "</b>";
        }
        ?>
    </body>
</html>
