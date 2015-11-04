<!DOCTYPE html>
<!--
Escribe un programa que lea una lista de diez números y determine cuántos son 
positivos, y cuántos son negativos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <?php
        
            $numero = $_POST['numero'];
            $contadorPositivos = $_POST['contadorPositivos'];
            $contadorNegativos = $_POST['contadorNegativos'];
            $contadorNumeros = $_POST['contadorNumeros'];
        
            if (!isset($numero) || ($contadorNumeros <= 9)) {
                
            $contadorNumeros++;
            
            if($numero >= 0) {
                $contadorPositivos ++;
            } else {
                $contadorNegativos ++;
            }
        ?>
        
            <form method="post"  action="">
                Número <?php echo "$contadorNumeros"; ?> 
                <input type="number" name="numero" autofocus="">
                <input type="hidden" name="contadorPositivos" value="<?=$contadorPositivos?>">
                <input type="hidden" name="contadorNegativos" value="<?=$contadorNegativos?>">
                <input type="hidden" name="contadorNumeros" value="<?=$contadorNumeros?>">
                <input type="submit" name="submit" value="Enviar">
            </form>
        <?php
            } else {
                echo "Hay ", $contadorPositivos, " números positivos y ", $contadorNegativos , " números negativos.";
            }
        ?>
    </body>
</html>

