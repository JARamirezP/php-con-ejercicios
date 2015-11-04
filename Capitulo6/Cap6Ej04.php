<!--
Juan Antonio Ramírez Parras

Establece un control de acceso mediante nombre de usuario y contraseña para 
cualquiera de los programas de la relación anterior. La aplicación no nos 
dejará continuar hasta que iniciemos sesión con un nombre de usuario y 
contraseña correctos.
-->
<?php //Inicio de sesión.
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capítulo 6 - Ejercicio 4</title>
    </head>
    <body>
        <?php
            
            $userInserted = $_POST['user'];
            $passwdInserted = $_POST['passwd'];
                
            $user = "admin";
            $passwd = "1234";
            
            //Mira primero si estás logueado para redirigirte. 
            if($_SESSION['logueado']) {
                header('Location: Cap6Ej02.php');
            }
            
            //Mira que los datos introducidos sean los correctos(en la primera carga no habrá datos a comprobar).
            if(($userInserted == $user) && ($passwdInserted == $passwd)) {
                echo "ACCESS SUCESSFULLY";
                $_SESSION['logueado'] = true;
                header("Refresh:3;url=Cap6Ej02.php");
            } else { 
                //Muestra el formulario.
                $_SESSION['logueado'] = false;
        ?>
        
                <form method="POST">
                    Control de acceso<br>
                    <input type="text" name="user" placeholder="Usuario"><br>

                    <input type="password" name="passwd" placeholder="Contraseña"><br><br>

                    <input type="submit" value="OK">
                </form>
        <?php
        
            }
        ?>        
    </body>
</html>
