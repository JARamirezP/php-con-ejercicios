<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <?php
        $cantidadEuros = 6;
        $pesetas;
                
        $pesetas = $cantidadEuros * 166.386;        
        ?>
        
        La cantidad de <?php echo $cantidadEuros;?>€ son <?php echo $pesetas;?>₧        
    </body>
</html>
