<!DOCTYPE html>
<!--
Escribe un programa que pida 10 números por teclado y que luego muestre los 
números introducidos junto con las palabras “máximo” y “mínimo” al lado del 
máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 5 - Ejercicio 02</title>
    </head>
    <body>
        <?php
            
            $numero = $_POST['numero'];
            $contadorNumeros = $_POST['contadorNumeros'];
            $cadenaNumero = $_POST['cadenaNumero'];

        
            if (($contadorNumeros <= 9) || (!isset($numero))) {
            
        ?>
        
            <form action="" method="post">
                Introduzca un número:
                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
                <input type="hidden" name="cadenaNumero" value="<?= $cadenaNumero . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>
        <?php
            } else {
                
                $cadenaNumero = $cadenaNumero . " " . $numero; // añade el último número leído
                $cadenaNumero = substr($cadenaNumero, 2);
                
                $array = explode(" ", $cadenaNumero);
                $min = min($array);               
                $max = max($array);
                
                echo "Los números introducidos son: <br>";
                
                for($i = 0; $i < 10; $i ++) {
                    
                    echo $array[$i];
                    
                    if($array[$i] == $max) {
                        echo " Máximo";
                    }
                    
                    if($array[$i] == $min) {
                        echo " Mínimo";
                    }
                    
                    echo "<br>";
                }
                
            }              
        ?>
    </body>
</html>
