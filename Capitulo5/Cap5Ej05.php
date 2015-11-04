<!DOCTYPE html>
<!--
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un
determinado año y que muestre a continuación un diagrama de barras horizontales 
con esos datos. Las barras del diagrama se pueden dibujar a base de la 
concatenación de una imagen.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 5 - Ejercicio 05</title>
        
        <style>
            div {
                float: left;
                background-color: #000064;
                width: 10px;
                height: 10px;               
            }            
        </style>
    </head>
    <body>
        <?php
            $mes[0] = "enero";
            $mes[1] = "febrero";
            $mes[2] = "marzo";
            $mes[3] = "abril";
            $mes[4] = "mayo";
            $mes[5] = "junio";
            $mes[6] = "julio";
            $mes[7] = "agosto";
            $mes[8] = "septiembre";
            $mes[9] = "octubre";
            $mes[10] = "noviembre";
            $mes[11] = "diciembre";
            
            $numMes = $_POST['numMes'];            
            $temperatura = $_POST['temperatura'];
            $temperaturaTexto = $_POST['temperaturaTexto'];

            if (!isset($temperatura)) {
              $temperaturaTexto = "";
            }
            
            if(($numMes <= 11)) {            
        ?>        
        
        <form method="post">
            <br>
            Introduzca la temperatura media de <?=  $mes[0 + $numMes] ?>
            <input type="number" name ="temperatura" autofocus>
            <input type="hidden" name="numMes" value="<?= ++$numMes ?>">
            <input type="hidden" name="temperaturaTexto" value="<?= $temperaturaTexto . " " . $temperatura ?>">
        </form>
        
        <?php
        
            }
            
            if($numMes == 12) {
                $temperaturaTexto = $temperaturaTexto . " " . $temperatura; 
                
                $temperaturaTexto = substr($temperaturaTexto, 2);    
                
                $temperaturaMes = explode(" ", $temperaturaTexto);
                
               for($i = 0; $i < 12; $i ++) {
                    echo $mes[$i], "<br>";
                    $temp = $temperaturaMes[$i];
                    
                    for($j = 0; $j < $temp; $j++) {
                        echo "<div>&nbsp;</div> &nbsp;";
                    }
                    
                    echo "<br>";
                    
                }
            }
        ?>
    </body>
</html>
