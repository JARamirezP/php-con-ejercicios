<!--
    -----
    |PDO|
    -----
    Página de borrado en la tabla cliente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cap7 - Ejercicio 2</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">      
    </head>    
<?php     

    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");

    $consulta = $conexion->query('SELECT * FROM cliente WHERE dni="' . $_GET['dni'] . '"');
    
    $registro = $consulta->fetchObject();
    
    //$paginaAnterior = $_SERVER['HTTP_REFERER']; 
    $param = $_GET['pagina'];
    
    //echo $paginaAnterior;
    echo $param;
    
    if($_POST['accion'] == "borrar") {
        $borrado = "DELETE FROM cliente WHERE dni='" . $_GET['dni'] . "'";
        
        $conexion->exec($borrado);
        
        header('Location: Cap7Ej02.php?pagina=' . $param);       
    }
?>
    <body>
        <div id="container">
            <table>
                <tr>
                    <td><b>DNI</b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Dirección</b></td>
                    <td><b>Teléfono</b></td>
                </tr>
                
                <tr>
                    <td><?= $registro->dni; ?></td>
                    <td><?= $registro->nombre; ?></td>
                    <td><?= $registro->direccion; ?></td>
                    <td><?= $registro->telefono; ?></td>
                </tr>                
            </table>
            
            <div id="confirmation">
                <form method="post">
                    <p>
                        ¿Está seguro de querer borrar este cliente?
                        
                        <button class="btn-sinEstilo" href="deleteCap7Ej02.php" name="accion" value="borrar"><i class="fa fa-trash-o"></i> Sí, borrar.</button>
                        |
                        <a href="Cap7Ej02.php"><i class="fa fa-arrow-left"></i> No, volver.</a>
                    </p>                    
                </form>
            </div>
        </div>
    </body>
</html>