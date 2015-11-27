<?php
    /*Página de alta en la tabla cliente.*/

    $conexion = mysql_connect("localhost", "root", "root");
    
    mysql_select_db("banco", $conexion);
    
    mysql_set_charset('utf8');

    $consulta = mysql_query("SELECT dni FROM cliente WHERE dni=".$_POST['dni']);

    $num_filas = mysql_num_rows($consulta);

    if($num_filas > 0) {
        echo "Ya existe un cliente con ese DNI.";
    } else {
        $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dni]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";

        mysql_query($insercion, $conexion);
        
        header("Location: Cap7Ej01.php");
    }
        
