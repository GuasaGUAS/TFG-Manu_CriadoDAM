<?php
include './funciones.php';
session_start();
$nombre = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["Correo"];
$contrasena = hash('sha512', $contrasena);
$insert_value = 'Insert into Usuarios(nombre,Correo_electronico,password,usuario) Values("' . $nombre . '","' . $correo . '","' . $contrasena . '","User");';
$consulta="select * from Usuarios where nombre='$nombre'";
$verifica_Usu= mysqli_query($conexion, $consulta);
if(mysqli_num_rows($verifica_Usu)>0){
   header("Location: index.php?validar=2");
    exit();
}
$ejec = mysqli_query($conexion, $insert_value);
if($ejec){
    header("Location: index.php");
}else{
   header("Location: index.php?validar=3");
}
   

