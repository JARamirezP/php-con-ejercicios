<!--
Juan Antonio Ramírez Parras

Escribe un programa que permita introducir una serie indeterminada de números 
mientras su suma no supere 10000. Si esto último ocurre, se debe mostrar el total
acumulado, el contador de los números introducidos y la media. Utiliza sesiones.
-->
<?php //Inicio de sesión.
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 3</title>
    </head>
    <body>
        <?php
        
        //Almacenar en la variable 'numero' lo recogido por el imput del mismo nombre.
        $numero = $_POST['numero'];
        
        //Efectuar la suma a excepción de la última carga de la página(cuando supere los 10000).
        if($_SESSION['suma'] < 10000) {
            $_SESSION['contador'] ++;
            $_SESSION['suma'] = $_SESSION['suma'] + $numero;
        }        
        
        //Mostrar el formulario si se cumple el condicional. 
        if((!isset($numero)) || ($_SESSION['suma'] < 10000)) {            
        
        ?>
        
            <form method="POST">
                Introduzca números, cuando no quiera meter más introduzca uno negativo.<br>
                <input type="number" name="numero" autofocus>
                <input type="submit" value="OK">
            </form>
        
        <?php
        
        } else {
            echo "Ha introducido <b>" . $_SESSION['contador'] . "</b> números.<br>";
            echo "La media de los números es <b>" . $_SESSION['suma'] / $_SESSION['contador'] . "</b><br>";
            echo "El suma total es <b>" . $_SESSION['suma'] . "</b>";            
        }
        
        ?>
    </body>
</html>
