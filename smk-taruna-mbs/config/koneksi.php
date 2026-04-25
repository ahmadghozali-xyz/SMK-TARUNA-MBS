<?php
$conn = mysqli_connect("localhost", "root", "", "smk_mbs");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>