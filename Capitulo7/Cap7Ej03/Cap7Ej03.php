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

Modifica la tienda virtual realizada anteriormente de tal forma que todos los 
datos de los artículos se guarden en una base de datos.

Juan Antonio Ramírez Parras
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MK distribuciones - Inicio</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        $conexion = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "root");
        
        $consulta = $conexion->query('SELECT * FROM catalogo order by codigo');        
        
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
        
        <?php                
            while ($registro = $consulta->fetchObject()){
        ?>
            <div class="view-product" onclick="location.href='descripcionCap7Ej03.php?codigo=<?=$registro->codigo?>';">                
                <img src="<?= $registro->imagen?>">
                <h5><?= $registro->nombre?></h5>
                <p><?= $registro->precio?> €</p>
            </div>
        <?php
            }
        ?> 
        </div>
    </body>
</html>
