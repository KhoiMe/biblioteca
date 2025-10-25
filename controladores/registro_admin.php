<?php
    include("../controladores/conexion.php");
    $correo=$_POST["correo"]
    $contra=$_POST["password"];
    mysqli_query($conexion,"insert into bibloteca_actualizada(correo,contrasena) values('$correo','$contra')")or die("Problemas en el select".mysqli_error($conexion));
    header("location:login.php");
?>