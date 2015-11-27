<!DOCTYPE html>
<!--
Crea una aplicación web que permita hacer listado, alta, baja y modificación 
sobre la tabla cliente de la base de datos banco.
    • Para realizar el listado bastará un SELECT, tal y como se ha visto en los 
      ejemplos.
    • El alta se realizará mediante un formulario donde se especificarán todos 
      los campos del nuevo registro. Luego esos datos se enviarán a una página 
      que ejecutará INSERT.
    • Para realizar una baja, se pedirá el DNI del cliente mediante un formulario
      y a continuación se ejecutará DELETE para borrar el registro cuyo DNI coincida
      con el introducido.
    • La modificación se realiza mediante UPDATE . Se pedirá previamente en un 
      formulario el DNI del cliente para el que queremos modificar los datos.

Juan Antonio Ramírez Parras
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cap7 - Ejercicio 1</title>
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
    <body>
        <?php
        
        $server = "localhost";
        $username = "root";
        $password = "root";
        
        $conexion = mysql_connect($server, $username, $password);
        
        mysql_select_db("banco", $conexion);
        
        mysql_set_charset('utf8');
        
        $consulta = mysql_query('SELECT * FROM cliente', $conexion);      
        
        ?>
        <div id="container">
            <table>
                <form method="post" action="insertCap7Ej01.php">
                   <tr>
                       <td><input type="text" name="dni" size="9" required></td>
                       <td><input type="text" name="nombre" required></td>
                       <td><input type="text" name="direccion"></td>
                       <td><input type="text" name="telefono" size="9"></td>
                       <td><button type="submit"><i class="fa fa-plus"></i></button></td>
                   </tr> 
                </form>
                
                <tr>
                  <td><b>DNI</b></td>
                  <td><b>Nombre</b></td>
                  <td><b>Dirección</b></td>
                  <td><b>Teléfono</b></td>
                </tr>
        <?php
                while ($registro = mysql_fetch_array($consulta)){
        ?>
                    <tr>
                      <td><?= $registro[dni] ?></td>
                      <td><?= $registro[nombre] ?></td>
                      <td><?= $registro[direccion] ?></td>
                      <td><?= $registro[telefono] ?></td>
                      <td><a href="updateCap7Ej01.php?dni=<?=$registro[dni]?>"<i class="fa fa-pencil"></i></a></td>
                      <td><a href="deleteCap7Ej01.php?dni=<?=$registro[dni]?>"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
    <?php
                }
    ?>                    
            </table>
        </div>
    </body>
</html>
