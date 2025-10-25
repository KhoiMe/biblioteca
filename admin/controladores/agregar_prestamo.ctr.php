<?php
include ("../../controladores/conexion.php");

$id_usuari=$_POST['id_usuario'];
$id_libro=$_POST['id_libro'];
$descripcion=$_POST['descriocion'];
$fecha=$_POST['fecha'];
$fecha_entrega=$_POST['fecha_entrega'];
$estado=$_POST['estado'];

$query = "insert into prestamo (id_usuario, id_libro, descripcion, fecha, fecha_entrega, estado) values ($id_usuario, $id_libro, $descrpcion, $fecha, $fecha_entrega, $estado)";

if (mysqli_query($conexion, $query)) {
    echo "se pudo prestar el libro";
} else {
    echo "no se pudo prestar el libro" . mysqli_error($conexion);
};

mysqli_close($conexion);

header("location:../pages/dashboard.html");

