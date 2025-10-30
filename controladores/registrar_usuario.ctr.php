<?php
include("../conexion.php");
$doc_id = $_POST["doc_id"];
$direccion = $_POST["direccion"];
$name = $_POST["name"];
$correo = $_POST["email"];
$telefono = $_POST["phone"];
$fecha_nac = $_POST["fecha_nac"];
$role_id = 2;

$sql = "INSERT INTO usuarios (doc_id, direccion, nombre, correo, telefono, fecha_nac, role_id) VALUES('$doc_id', '$direccion','$name','$correo','$telefono','$fecha_nac',$role_id)";

if ($conn->query($sql) !== TRUE) {
    echo "ERROR:" . $sql . "<br>" . $conn->error;
}

$conn->close();

session_start();
$_SESSION['doc_id'] = $doc_id;
$_SESSION['username'] = $name;
$_SESSION['role'] = $role_id;

// TODO: redirect to correct pages
if($_SESSION['role'] == 1) {
    header("location: ../admin/pages/dashboard.html");
    exit;
} else {
    header("location: ../vistas/feed.php");
    exit;
}

