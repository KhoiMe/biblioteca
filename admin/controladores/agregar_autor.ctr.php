<?php
include("../../conexion.php");


$nombre = $_POST['nombre'];
$biografia = $_POST['biografia'];

$sql = "INSERT INTO autores (nombre, biografia) values ('$nombre', '$biografia')";

if ($conn->query($sql) !== TRUE) {
    header("Location: ../pages/agregar_autores.html?success=1");
    exit;
} else {
    header("Location: ../pages/agregar_autores.html?error=" . urlencode(mysqli_error($conn)));
    exit;
};

$conn->close();



