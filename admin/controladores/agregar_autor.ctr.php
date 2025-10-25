<?php
include("../../conexion.php");


$nombre = $_POST['nombre'];
$biografia = $_POST['biografia'];

$query = "INSERT INTO autores (nombre, biografia) values ('$nombre', '$biografia')";

if (mysqli_query($conexion, $query)) {
    header("Location: ../pages/agregar_autores.html?success=1");
    exit;
} else {
    header("Location: ../pages/agregar_autores.html?error=" . urlencode(mysqli_error($conexion)));
    exit;
};

mysqli_close($conexion);



