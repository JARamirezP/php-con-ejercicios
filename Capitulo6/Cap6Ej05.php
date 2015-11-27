<?php
    session_start();
?>
<!DOCTYPE html>
<!--
Juan Antonio Ramírez Parras
Crea una tienda on-line con un catálogo de productos y un carrito de la compra. 
De cada producto se debe conocer al menos la descripción y el precio. Todos los 
productos deben tener una imagen que los identifique. Al lado de cada producto 
deberá aparecer un botón Comprar que permita añadirlo al carrito. Si el usuario 
hace clic en el botón Comprar de un producto que ya estaba en el carrito, se 
deberá incrementar el número de unidades de dicho producto. Para cada producto 
que aparece en el carrito, habrá un botón Eliminar. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 5</title>
        
        <link rel=stylesheet href="styles/style_Cap6Ej05.css" type="text/css">
    </head>
    <body>
        <div id="contenedor">
            <div id="contenedorTitulo">
                <img src="images/logo.jpg">
            </div>
            
            <div id="contenedorProductos">
            <?php
                $product = array (                    
                  "00305001" =>  array ("name" => "Camiseta Ellesse azul", "price" => "20", "image" => "images/ellesse_t-shirt_blue.jpg"),
                  "00306001" =>  array ("name" => "Camiseta Fred Perry caoba", "price" => "25", "image" => "images/fredperry_t-shirt_maghogany.jpg"),
                  "00306002" =>  array ("name" => "Camiseta Fred Perry rayas", "price" => "23", "image" => "images/fredperry_t-shirt_stripesbw.jpg"),
                  "00307001" =>  array ("name" => "Camiseta Henri Lloyd radar", "price" => "27", "image" => "images/henrilloyd_t-shirt_radar.jpg")
                );
                
                foreach($product as $code => $element) {
            ?>
                    <b> <?=$element[name]?> </b><br>
                    <b> <?=$element[price]?>€ </b><br>
                    <img class="border" src="<?=$element[image]?>" width="230" height="191"><br>
                    <form action="#" method="post">
                        <input type="hidden" name="code" value="<?=$code?>">
                        <input type="hidden" name="action" value="buy">
                        <input type="submit" value="Comprar"><br><hr>
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
