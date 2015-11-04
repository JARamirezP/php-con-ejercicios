<!DOCTYPE html>
<!--
Escribe un programa que lea 15 números por teclado y que los almacene en un 
array. Rota los elementos de ese array, es decir, el elemento de la posición 0
debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra 
en la última posición debe pasar a la posición 0. Finalmente, muestra el 
contenido del array.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 5 - Ejercicio 03</title>
    </head>
    <body>
        <?php
            
            $numero = $_POST['numero'];
            $contadorNumeros = $_POST['contadorNumeros'];
            $cadenaNumero = $_POST['cadenaNumero'];

        
            if (($contadorNumeros < 15) || (!isset($numero))) {
            
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
                $temp;
                $final;
                
                echo "Array original: ";
                foreach ($array as $n) {
                    echo $n, " | "; 
                }
                
                for($i = 0; $i < 15; $i ++) {
                    if($i == 0) {
                        $final = $array[$i];
                    }

                    $temp = $array[$i];
                    $array[$i] = $array[$i + 1];

                    if($i == 14) {
                       $array[$i] = $final; 
                    }

                }
                
                echo "<br>";

                echo "Array rotado: ";
                foreach ($array as $n) {
                   echo $n, " | "; 
                }
            }
        ?>
    </body>
</html>
