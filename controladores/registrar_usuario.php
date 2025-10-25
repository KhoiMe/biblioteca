<?php
include("controladores/conexionA.php");
    $id = $_POST["id"];
    $direccion = $_POST["direccion"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $fecha_nac = $_POST["fecha_nac"];
    mysqli_query($conexion,"insert into biblioteca_actualizada(id,direccion,nombre,correo,telefono,fecha_nac) values($id,'$direccion','$nombre','$correo','$telefono','$fecha_nac')")or die("Problemas en el select".mysqli_error($conexion));
    header("location:registrar_form.html");
?>