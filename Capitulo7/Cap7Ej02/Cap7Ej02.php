<?php
    session_start();
?>
<!DOCTYPE html>
<!--
--------------
|Hecho en PDO|
--------------

Modificar el programa anterior añadiendo las siguientes mejoras:
    • El listado debe aparecer paginado en caso de que haya muchos clientes.
    • Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI
      introducido en el formulario.
    • La opción de borrado debe pedir confirmación.
    • Cuando se realice la modificación de los datos de un cliente, los campos 
      que no se han cambiado deberán permanecer inalterados en la base de datos.

Juan Antonio Ramírez Parras
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cap7 - Ejercicio 2</title>
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        if(isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        }        
        
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
        
        header('Cap7Ej02.php?pagina');
        
        $consultaContar = $conexion->query('SELECT * FROM cliente');
        $numFilas = $consultaContar->rowCount();
        
        $numPaginas = ceil($numFilas / 5);
        
        $consulta = $conexion->query('SELECT * FROM cliente LIMIT ' . 5 * $pagina  . ',5');      
        
        ?>
        <div id="container">
            <table>
                <form method="post" action="insertCap7Ej02.php">
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
                while ($registro = $consulta->fetchObject()){
        ?>
                    <tr>
                      <td><?= $registro->dni ?></td>
                      <td><?= $registro->nombre ?></td>
                      <td><?= $registro->direccion ?></td>
                      <td><?= $registro->telefono ?></td>
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
                    <a href="Cap7Ej02.php?pagina=<?=$pagina - 1?>"><i class="fa fa-chevron-left"></i></a> 
                <?php
                }
                
                if($pagina < $numPaginas - 1) {
                ?>
                    <a href="Cap7Ej02.php?pagina=<?=$pagina + 1?>"><i class="fa fa-chevron-right"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>
