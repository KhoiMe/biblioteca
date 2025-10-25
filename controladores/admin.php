<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
</head>
<body>
    <p>Bienvenido <strong><?php echo $_SESSION['nombre']; ?></strong></p>
         <a href="registrar_form.html">registrar usuarios</a><br><br>
</body>
</html>