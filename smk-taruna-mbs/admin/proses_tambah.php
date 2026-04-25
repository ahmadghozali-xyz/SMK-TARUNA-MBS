<?php
include "../config/koneksi.php";

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$folder = "../uploads/";

if($gambar != ""){
    move_uploaded_file($tmp, $folder . $gambar);
}

mysqli_query($conn, "INSERT INTO kegiatan VALUES(NULL,'$judul','$deskripsi','$gambar','$tanggal')");

header("Location: dashboard.php");
?>