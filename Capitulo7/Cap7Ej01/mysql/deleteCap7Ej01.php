<?php
    /*Página de borrado de la tabla cliente.*/
    $conexion = mysql_connect("localhost", "root", "root");
    mysql_select_db("banco", $conexion);

    $borrado = mysql_query("DELETE FROM cliente WHERE dni=".$_GET['dni']);
    
    mysql_query($borrado, $conexion);
        
    header("Location: Cap7Ej01.php");
