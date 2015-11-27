<?php
    /* -----
     * |PDO|
     * -----
     * Página de borrado en la tabla cliente.*/

    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");

    $borrado = $conexion->query("DELETE FROM cliente WHERE dni=".$_GET['dni']);
    
    $conexion->exec($borrado);
        
    header("Location: Cap7Ej01_PDO.php");
