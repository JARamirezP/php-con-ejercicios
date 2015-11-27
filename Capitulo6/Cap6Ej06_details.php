<?php
    session_start();
?>
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
            $code = $_POST[code];
            $producto = $_SESSION['producto'];
            $element = $product[$code];
            
            include 'Cap06Ej06_products.php';
        ?>
            
            <b> <?=$product[$code][name]?> </b><br>
            <b> <?=$element[price]?>€ </b><br>
            <img class="border" src="<?=$element[image]?>" width="230" height="191"><br>
            <?=$element[$detail]?>
            
    </body>
</html>
