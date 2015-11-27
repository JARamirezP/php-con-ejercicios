<?php
    /* -----
     * |PDO|
     * -----
     * Página de alta en la tabla cliente.*/

    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");

    $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni='".$_POST['dni']."'");
    
    $numFilas = $consulta->rowCount();
    
    if($numFilas > 0) {
        echo "Ya existe un cliente con ese DNI.<br>";
        echo "<a href='Cap7Ej02.php'>Inicio</a>";
    } else {
        $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dni]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";

        $conexion->exec($insercion);
        
        header("Location: Cap7Ej02.php");
    }
        
