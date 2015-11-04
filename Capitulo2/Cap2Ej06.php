<!DOCTYPE html>
<!--
Escribe un programa que calcule el área de un triángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <div id="contenedor">
            <?php

            if(isset($_POST['submit'])) {

                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $areaTriangulo = ($base * $altura) / 2;

                echo "El área del triángulo es $areaTriangulo <br><br>";           
            }

            ?>

            <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>               
                    <legend>Introduzca la base y la altura</legend>
                    
                    <div id="contenedorLabel">
                        <label for="base">Base</label>
                        <input type="number" name="base">
                    </div>
                    
                    <div id="contenedorLabel">
                        <label for="altura">Altura</label> 
                        <input type="number" name="altura">
                    </div>
                    
                    <input type="submit" name="submit" value="Enviar"><br>
                </fieldset>
            </form>
        </div>
       
    </body>
</html>

