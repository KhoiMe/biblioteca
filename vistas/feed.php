<?php
include("../conexion.php");

if (isset($_SESSION['doc_id'])) {
    $doc = $_SESSION['doc_id'];
    echo $doc . "hello";
} else {
    // eventually will send them to a 403 or "you don't have permission to be.."
    header("location: ../vistas/403.html");
    exit;
}
