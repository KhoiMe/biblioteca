<?php
include("../../conexion.php");

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$categoria = $_POST['categoria'];
$descrpcion = $_POST['descripcion'];
$autor_id = $_POST['autor_id'];

if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== 0) {
    die("❌ Error: Debes subir una imagen para el libro.");
}

$targetDir = "../../uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$fileName = basename($_FILES["imagen"]["name"]);
$uniqueName = uniqid() . "_" . $fileName;
$targetFile = $targetDir . $uniqueName;

if (!move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
    die("❌ Error al guardar la imagen.");
}

$image_path = "uploads/" . $uniqueName;

$sql = "INSERT INTO libros (nombre, genero, categoria, descripcion, autor_id, image_path) values ('$nombre', '$genero', '$categoria', '$descrpcion', '$autor_id', '$image_path')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../pages/agregar_libros.html?success=1");
    exit;
} else {
    header("Location: ../pages/agregar_libros.html?error=2" );
    exit;
};

$conn->close();
