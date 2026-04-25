<?php
session_start();
include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_array($query);

if($data){
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
}else{
    echo "<script>alert('Login gagal'); window.location='login.php';</script>";
}
?>