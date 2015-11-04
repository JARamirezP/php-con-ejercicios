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
        $cantidadPesetas = 1000000;
        $euros;
                
        $euros = $cantidadPesetas / 166.386;
        $euros = round($euros * 100) / 100 
        ?>
        
        La cantidad de <?php echo $cantidadPesetas;?>₧ son <?php echo $euros;?>€
    </body>
</html>
