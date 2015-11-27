<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar cliente</title>
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php        
        
        $conexion = mysql_connect("localhost", "root", "root");
        
        mysql_select_db("banco", $conexion);
        
        mysql_set_charset('utf8');
        
        $consulta = mysql_query('SELECT * FROM cliente WHERE dni="' . $_GET['dni'] . '"', $conexion);
        
        $dni = mysql_result($consulta, 0, "dni");
        $nombre = mysql_result($consulta, 0, "nombre");
        $direccion = mysql_result($consulta, 0, "direccion");
        $telefono = mysql_result($consulta, 0, "telefono");
        
        if($_POST['accion'] == "modificar") {
            $modificacion = "UPDATE cliente SET  nombre='" . $_POST[nombre] . "', direccion='" . $_POST[direccion] . "', telefono='" . $_POST[telefono] . "' WHERE dni='" . $_GET[dni] . "';";
            
            mysql_query($modificacion, $conexion);
        
            header("Location: Cap7Ej01.php");
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
                    <td><?= mysql_result($consulta, 0, "dni") ?></td>
                    <td><?= mysql_result($consulta, 0, "nombre") ?></td>
                    <td><?= mysql_result($consulta, 0, "direccion") ?></td>
                    <td><?= mysql_result($consulta, 0, "telefono") ?></td>
                </tr>
            </table>
            
            <div id="back">
                <a href="Cap7Ej01.php"><i class="fa fa-arrow-left"></i> Inicio</a>

            </div>
        </div>
    </body>
</html>
