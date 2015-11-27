<?php
    session_start();
?>
<!DOCTYPE html>
<!--
Juan Antonio Ramírez Parras
Amplía el programa anterior de tal forma que se pueda ver el detalle del producto.
Cada uno de los productos del catálogo tendrá un botón Detalle, al ser accionado,
llevará al usuario a la vista de detalle. Se podrán añadir productos al carrito 
tanto desde la vista de listado como desde la vista de detalle.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 5</title>
        
        <link rel=stylesheet href="styles/style_Cap6Ej06.css" type="text/css">
    </head>
    <body>
        <div id="contenedor">
            <div id="contenedorTitulo">
                <div id="contenedorLogo">
                    <img src="images/logo.jpg">
                </div>
            </div>
            
            <div id="contenedorProductos">
            <?php                
                
                include "Cap6Ej06_products.php";
                
                foreach($product as $code => $element) {
            ?>
                    <b> <?=$element[name]?> </b><br>
                    <b> <?=$element[price]?>€ </b><br>
                    <img class="border" src="<?=$element[image]?>" width="230" height="191"><br>
                    <form action="#" method="post">
                        <input type="hidden" name="code" value="<?=$code?>">
                        <input type="hidden" name="action" value="buy">
                        <input type="submit" value="Comprar">
                    </form>
                    
                    <form action="Cap6Ej06_details.php" method="post">
                        <input type="hidden" name="code" value="<?=$code?>">
                        <input type="submit" value="Detalle"><br><hr>
                    </form>
            <?php        
                }
            ?>
            </div>
            
            <div id ="contenedorCarrito">
            <?php
                //Recogemos la acción y el código del producto.
                $action = $_POST['action'];
                $code = $_POST['code'];
                
                if(!isset($_SESSION[shoppingCart])) {
                    $_SESSION[shoppingCart] = array ("00305001" => 0, "00306001" => 0, "00306002" => 0, "00307001" => 0);
                }
                
                if($action == "buy") {
                    $_SESSION[shoppingCart][$code]++;
                }
                
                if($action == "remove") {
                    $_SESSION[shoppingCart][$code] = 0;
                }
                
                $totalPrice = 0;
            ?>
                <h4>Carrito</h4>
            
            <?php
                
                foreach($product as $code => $element) {
                    if($_SESSION[shoppingCart][$code] > 0) {
                        $total = $total + ($_SESSION[shoppingCart][$code] * $element[price]);
            ?>          
                        
                        <img class="border" src="<?=$element[image]?>" width="115" height="95"><br>
                        <?=$element[name]?><br>
                        <?=$element[price]?> €<br>
                        Unidades: <?=$_SESSION[shoppingCart][$code]?><br>
                        
                        <form action="#" method="post">
                            <input type="hidden" name="code" value="<?=$code?>">
                            <input type="hidden" name="action" value="remove">
                            <input type="submit" value="Eliminar"><br><hr>                                                        
                        </form>
                        
            <?php
                    }
                }
                    echo "Total de compra " . $total . "€";
            ?>
            </div>
        </div>
    </body>
</html>
