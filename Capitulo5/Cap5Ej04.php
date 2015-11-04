<!DOCTYPE html>
<!--
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los 
muestre por pantalla separados por espacios. El programa pedirá entonces por 
teclado dos valores y a continuación cambiará todas las ocurrencias del primer 
valor por el segundo en la lista generada anteriormente. Los números que se han
cambiado deben aparecer resaltados de un color diferente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 5 - Ejercicio 04</title>
        
        <style>
            #contenedor {
                width: 300px;
                height: 180px;
                background-color: #3A82B2;
                padding: 9px;
                text-align: justify;
                opacity: 0.9;
            }
        </style>
    </head>
    <body>
        <div id="contenedor"> 
            <?php

                for ($i = 0; $i < 100; $i++) {
                    $generado = rand(0, 20); // números aleatorios entre 0 y 20 (ambos incluidos)
                    $numero[$i] = $generado;

                    echo $numero[$i], " ";

                    $numeroTexto = implode(" ", $numero);
                }
            
            ?>
        </div>
        
        <form action="" method="post">
            <br>
            Introduzca el número que desea cambiar:
            <input type="number" name ="aCambiar" autofocus><br>
            Introduzca el número por el que lo desea cambiar:
            <input type="number" name ="cambiado" autofocus>            
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto ?>">
            <input type="submit" value="OK">
        </form>
        
        <?php
            $cambiado = $_POST['cambiado'];
            $aCambiar = $_POST['aCambiar'];
            $numeroTexto = $_POST['numeroTexto'];
            
            if((isset($cambiado)) && (isset($aCambiar))) {
                
               $numero = explode(" ", $numeroTexto);
               
               for ($i = 0; $i < 100; $i++) {
                    if($numero[$i] == $aCambiar) {
                        $numero[$i] = $cambiado;
        ?>
                        <span style="color:#FF0000"><?=$cambiado?></span>
        <?php
                    } else {
                        echo $numero[$i], " ";
                    }
                }
            }
        ?>
    </body>
</html>
