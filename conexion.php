<?php
$conn = new mysqli("127.0.0.1", "root", "", "biblioteca") or die("problemas en la conexion");

if ($conn->connect_error) {
    die("connection failed:". $conn->connect_error);
}
