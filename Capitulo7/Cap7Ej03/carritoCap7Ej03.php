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
        <title>MK distribuciones - Carrito</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    
    <?php        
        
        $codigo = $_POST['codigo'];
        $accion = $_POST['accion'];
        
        $conexion = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "root");
        
        $consulta = $conexion->query("SELECT * FROM catalogo WHERE codigo='" . $codigo . "'");
        
        $registro = $consulta->fetchObject();
        
        
        //Acciones al carrito.        
        if($accion == "comprar") {
            $_SESSION['carrito'][$codigo]++;
        }
        
        if($accion == "eliminar") {
            unset($_SESSION['carrito'][$codigo]);
        }
        
        //Contador de artículos en el carrito.
        $numeroArticulos = 0; 
        foreach($_SESSION['carrito'] as $code => $element) {
            $numeroArticulos = $numeroArticulos + $_SESSION['carrito'][$code];                                        
        }
        ?>
    
    <body>
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
        
        <?php
        if(!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
        ?>
            <h4>No hay ningún producto en la cesta de la compra.</h4>
            <p>Puede añadir nuevos agregándolos desde nuestro catálogo.</p>
        
        <?php
        }
        
        foreach($_SESSION['carrito'] as $codigo=>$cantidad) {
            $consulta = $conexion->query("SELECT * FROM catalogo WHERE codigo='" . $codigo . "'");        
            $registro = $consulta->fetchObject(); 
        ?>
            <div class="view-product-basket">
                <img src="<?=$registro->imagen?>">
                <h5><?=$registro->nombre?></h5>
                <p><?=$registro->precio?> €</p>
                <p>Cantidad <?=$cantidad?></p>
                
                <div class="btn">
                    <form action="#" method="post">
                        <input type="hidden" name="codigo" value="<?=$registro->codigo?>">
                        <input type="hidden" name="accion" value="eliminar">
                        <input type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        <?php
        }        
        ?>
        </div>
    </body>
</html>
