<?php
    include("conexion/conexion.php");
    $nombre_apellido=$_POST["nombre_apellido"];
    $gmail=$_POST["correo_electronico"];
    $telefono=$_POST["telefono"];
    mysqli_query($conexion,"insert into usuarios(,nombre_apellido,correo_electronico,telefono)values('$nombre_apellido','$gmail','$telefono')")or die("problemas en el select".mysqli_error($conexion));
    echo"se guardaron los datos con exito";
?>
