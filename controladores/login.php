<?php
session_start();

$conex = new mysqli("localhost", "root", "", "administrador");

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM administrador WHERE correo = ?";
$stmt = $conex->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $admin = $resultado->fetch_assoc();

    if (password_verify($contrasena, $admin['contrasena'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['correo'] = $admin['correo'];

        header("Location: index.html");
        exit();
    } else {
        echo "⚠️ Contraseña incorrecta.";
    }
} else {
    echo "⚠️ Correo no registrado.";
}
?>
