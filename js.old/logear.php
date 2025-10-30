<?php
    include ("conexion.php");
    $user=$_POST["usuario"];
    $pass=$_POST["password"];
    $buscar=mysqli_query($conexion,"select * from usuarios where usuario='$user' && password='$pass'");
    if(mysqli_num_rows($buscar)>0){
        session_start();
        header("location:admin.php");
    }else{
        header("location:login.php");
    }
?>
