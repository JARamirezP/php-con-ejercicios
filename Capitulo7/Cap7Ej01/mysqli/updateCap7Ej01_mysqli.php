<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar cliente</title>
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php        
        
        $conexion = new mysqli("localhost", "root", "root");

        $conexion->select_db("banco");

        $conexion->set_charset('utf8');
        
        $consulta = $conexion->query('SELECT * FROM cliente WHERE dni="' . $_GET['dni'] . '"');
        
        /*Extracción de la fila seleccionada y almacenamiento en variables para los values del form*/
        $registro = $consulta->fetch_object();
        
        $dni = $registro->dni;
        $nombre = $registro->nombre;
        $direccion = $registro->direccion;
        $telefono = $registro->telefono;
        
        if($_POST['accion'] == "modificar") {
            $modificacion = "UPDATE cliente SET  nombre='" . $_POST[nombre] . "', direccion='" . $_POST[direccion] . "', telefono='" . $_POST[telefono] . "' WHERE dni='" . $_GET[dni] . "';";
            
            $conexion->query($modificacion);
        
            header("Location: Cap7Ej01_mysqli.php");
        }
        
        ?>
        
        <div id="container">
            <table>
                <form method="post">
                   <tr>
                       <td><input type="text" name="dni" size="9" value="<?=$dni?>" disabled></td>
                       <td><input type="text" name="nombre" value="<?=$nombre?>"></td>
                       <td><input type="text" name="direccion" value="<?=$direccion?>"></td>
                       <td><input type="text" name="telefono" size="9" value="<?=$telefono?>"></td>
                       <td><button type="submit" name="accion" value="modificar"><i class="fa fa-pencil"></i></button></td>
                   </tr> 
                </form>
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
            
            <div id="back">
                <a href="Cap7Ej01_mysqli.php"><i class="fa fa-arrow-left"></i> Inicio</a>                
            </div>
        </div>
    </body>
</html>
