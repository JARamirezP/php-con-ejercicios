<?php
    session_start();
    
    //Contador de artículos en el carrito.
    
    $numeroArticulos = 0;
    foreach($_SESSION['carrito'] as $code => $element) {
        $numeroArticulos = $numeroArticulos + $_SESSION['carrito'][$code];                                        
    }
?>
<!DOCTYPE html>
<!--
--------------
|Hecho en PDO|
--------------

Página que muestra una vista detallada del producto.

Juan Antonio Ramírez Parras
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MK distribuciones - Detalle</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        $conexion = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "root");
        
        $consulta = $conexion->query("SELECT * FROM catalogo WHERE codigo='" . $_GET['codigo'] . "'");
        
        $registro = $consulta->fetchObject();        
        
        ?> 
        
        <div id="header">
            <div id="logo" onclick="location.href='Cap7Ej03.php';">
                <img src="images/logo.jpg">
            </div>
            
            <div id="nav">
                <div class="nav-section" onclick="location.href='Cap7Ej03.php';">
                    INICIO
                </div>
                
                <div class="nav-section">
                    ¿QUIÉNES SOMOS?
                </div>
                
                <div class="nav-section">
                    CONTACTO
                </div>                
                
                <div id="basket">
                    <a href="carritoCap7Ej03.php"><i class="fa fa-shopping-cart"></i> CARRITO(<?=$numeroArticulos?>)</a>
                </div>
            </div>
        </div>
        
        <div id="container">
            <div class="view-detail-image">
                <img src="<?=$registro->imagen?>">                       
            </div>
            
            <div class="view-detail-product">
                <h4><?=$registro->nombre?></h4>
                <p><?=$registro->precio?> €</p>
                <p><?=$registro->descripcion?></p>
                
                <div class="btn">
                    <form action="carritoCap7Ej03.php" method="post">
                        <input type="hidden" name="codigo" value="<?=$registro->codigo?>">
                        <input type="hidden" name="accion" value="comprar">
                        <input type="submit" value="Añadir">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
