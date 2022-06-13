<?php

include './funciones.php';
iniciar();

$nombre = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $contrasena = hash('sha512', $contrasena);
    $sql = "select * from Usuarios where nombre='$nombre' and password='$contrasena'and usuario='Admin' ";
    $sql2 = "select * from Usuarios where nombre='$nombre' and password='$contrasena'and usuario='User' ";
    $validar_usuario = mysqli_query($conexion, $sql);
    $validar_usuario2 = mysqli_query($conexion, $sql2);
    if (mysqli_num_rows($validar_usuario) > 0) {
        
        $_SESSION["Login"] = $nombre;
        header("Location: admin.php");
    } elseif(mysqli_num_rows($validar_usuario2) > 0) { 
        $_SESSION["Login"] = $nombre;
        header("Location: Inicio.php");
        
    }else{
        header("Location: index.php?validar=1");
    }