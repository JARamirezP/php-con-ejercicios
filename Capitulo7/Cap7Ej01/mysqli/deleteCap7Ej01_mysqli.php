<?php
    /* --------
     * |mysqli|
     * --------
     * Página de borrado en la tabla cliente.*/

    $conexion = new mysqli("localhost", "root", "root");
    
    $conexion->select_db("banco");
    
    $conexion->set_charset('utf8');

    $borrado = $conexion->query("DELETE FROM cliente WHERE dni=".$_GET['dni']);
    
    $conexion->query($borrado);
        
    header("Location: Cap7Ej01_mysqli.php");
