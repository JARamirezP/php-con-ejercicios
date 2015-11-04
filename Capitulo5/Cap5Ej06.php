<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números enteros y que luego muestre esos números 
de colores, los pares de un color y los impares de otro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 5 - Ejercicio 06</title>
    </head>
    <body>
        <?php
            
            $numero = $_POST['numero'];
            $contador = $_POST['contador'];
            $cadenaTexto = $_POST['cadenaTexto'];
            
            if(($contador < 8)) {            
        ?>        
        
        <form method="post">
            <br>
            Introduzca un número entero
            <input type="number" name ="numero" min="0" autofocus>
            <input type="hidden" name="contador" value="<?= ++$contador ?>">
            <input type="hidden" name="cadenaTexto" value="<?= $cadenaTexto . " " . $numero ?>">
        </form>
        
        <?php
            } else {
                $cadenaTexto = $cadenaTexto . " " . $numero; 
                
                $cadenaTexto = substr($cadenaTexto, 2);    
                
                $matrizNum = explode(" ", $cadenaTexto);
                
                foreach($matrizNum as $elemento) {
                    if($elemento % 2 == 0) {
        
                       echo "<span style='color:#FF0000'>$elemento&nbsp;</span>";        
                    } else {
                       echo "<span style='color:#000066'>$elemento&nbsp;</span>";
                    }
                }
                echo "<br>Pares en rojo, impares en azul";
            }
        ?>
        
        
    </body>
</html>
