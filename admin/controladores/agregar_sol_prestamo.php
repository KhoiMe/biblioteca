<?php
include ("../../controladores/conexion.php");

$id_usuari=$_POST['id_usuario'];
$id_libro=$_POST['id_libro'];
$date=$_POST['date'];

$query="insert into sol_prestamo (id_libro, id_usurio, date) values ($id_libro, $id_usuario, $date)";

if (mysqli_query($conexion, $query)) {
    echo "se pudo hacer la solicitud para prestar el libro";
} else {
    echo "no se pudo hacer la solicitud por prestar el libro" . mysqli_error($conexion);
};

mysqli_close($conexion);

header("location:../pages/dashboard.html");
