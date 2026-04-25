<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT gambar FROM kegiatan WHERE id=$id");
$d = mysqli_fetch_array($data);

unlink("../uploads/".$d['gambar']);

mysqli_query($conn,"DELETE FROM kegiatan WHERE id=$id");

header("Location: dashboard.php");
?>