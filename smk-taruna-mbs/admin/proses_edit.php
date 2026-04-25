<?php
include "../config/koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

$gambar = $_FILES['gambar']['name'];

if($gambar != ""){
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../uploads/".$gambar);

    mysqli_query($conn,"UPDATE kegiatan SET 
    judul='$judul',
    deskripsi='$deskripsi',
    tanggal='$tanggal',
    gambar='$gambar'
    WHERE id=$id");
}else{
    mysqli_query($conn,"UPDATE kegiatan SET 
    judul='$judul',
    deskripsi='$deskripsi',
    tanggal='$tanggal'
    WHERE id=$id");
}

header("Location: dashboard.php");
?>