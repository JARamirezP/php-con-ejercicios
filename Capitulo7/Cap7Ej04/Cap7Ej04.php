<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cap7 - Ejercicio 4</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        if(isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        }        
        
        $conexion = new PDO("mysql:host=localhost;dbname=gestisimal;charset=utf8", "root", "root");
        
        header('Cap7Ej02.php?pagina');
        
        $consultaContar = $conexion->query('SELECT * FROM articulo');
        $numFilas = $consultaContar->rowCount();
        
        $numPaginas = ceil($numFilas / 5);
        
        $consulta = $conexion->query('SELECT * FROM articulo LIMIT ' . 5 * $pagina  . ',5');      
        
        ?>
        <div id="container">
            <table>
                <form method="post" action="insertCap7Ej04.php">
                   <tr>
                       <td><input type="text" name="codigo" size="9" required></td>
                       <td><input type="textarea" name="descripcion" size="30"></td>
                       <td><input type="text" name="precioCompra" size="12"></td>
                       <td><input type="text" name="precioVenta" size="12"></td>
                       <td><input type="text" name="stock" size="1"></td>
                       <td><button type="submit"><i class="fa fa-plus"></i></button></td>
                   </tr> 
                </form>
                
                <tr>
                  <td><b>Código</b></td>
                  <td><b>Descripción</b></td>
                  <td><b>Precio compra</b></td>
                  <td><b>Precio venta</b></td>
                  <td><b>Stock</b></td>
                </tr>
        <?php                
                while ($registro = $consulta->fetchObject()){
        ?>
                    <tr>
                      <td><?= $registro->codigo ?></td>
                      <td><?= $registro->descripcion ?></td>
                      <td><?= $registro->precio_compra ?></td>
                      <td><?= $registro->precio_venta ?></td>
                      <td><?= $registro->stock ?></td>
                      <td><a href="updateCap7Ej02.php?dni=<?=$registro->dni?>"<i class="fa fa-pencil"></i></a></td>
                      <td><a href="deleteCap7Ej02.php?dni=<?=$registro->dni?>"><i class="fa fa-trash-o"></i></a></td>
                    </tr> 
    <?php
                }
    ?>                    
            </table>
            
            <div id="back"> 
                
                <?php
                if($pagina > 0) {
                ?>
                    <a href="Cap7Ej04.php?pagina=<?=$pagina - 1?>"><i class="fa fa-chevron-left"></i></a> 
                <?php
                }
                
                if($pagina < $numPaginas - 1) {
                ?>
                    <a href="Cap7Ej04.php?pagina=<?=$pagina + 1?>"><i class="fa fa-chevron-right"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>

