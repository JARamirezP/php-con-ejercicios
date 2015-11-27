<?php
    /* --------
     * |mysqli|
     * --------
     * Página de alta en la tabla cliente.*/

    $conexion = new mysqli("localhost", "root", "root");
    
    $conexion->select_db("banco");
    
    $conexion->set_charset('utf8');

    $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=".$_POST['dni']);

    $num_filas = $consulta->num_rows;

    if($num_filas > 0) {
        echo "Ya existe un cliente con ese DNI.";
    } else {
        $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dni]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";

        $conexion->query($insercion);
        
        header("Location: Cap7Ej01_mysqli.php");
    }
        
