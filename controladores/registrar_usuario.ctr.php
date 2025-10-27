<?php
include("../conexion.php");
$doc_id = $_POST["doc_id"];
$direccion = $_POST["direccion"];
$nombre = $_POST["name"];
$correo = $_POST["email"];
$telefono = $_POST["phone"];
$fecha_nac = $_POST["fecha_nac"];
$role_id = 2;

$sql = "INSERT INTO usuarios (doc_id, direccion, nombre, correo, telefono, fecha_nac, role_id) VALUES('$doc_id', '$direccion','$nombre','$correo','$telefono','$fecha_nac',$role_id)";

if ($conn->query($sql) !== TRUE) {
    echo "ERROR:" . $sql . "<br>" . $conn->error;
}

$conn->close();

/* header("location:indexx.html"); */ // redirect to books
