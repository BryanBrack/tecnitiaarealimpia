<?php
include("cn.php");

$usuarios = $_POST["usuarios"];
$contraseña = $_POST["contraseña"];
session_start();
$_SESSION['usuarios'] = $usuarios;



    $consulta = "SELECT * FROM usuario WHERE usuarios = '$usuarios' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);
    $filas = mysqli_num_rows($resultado);   

    if($filas){
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: inicio.php"); 
        
    }else{
        echo 'El email o password es incorrecto, <a href="index.php">vuelva a intenarlo</a>.<br/>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

