<?php
include "../config/koneksi.php";
$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM kegiatan WHERE id=$id");
$d = mysqli_fetch_array($data);
?>

<h2>Edit</h2>

<form action="proses_edit.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<input type="text" name="judul" value="<?php echo $d['judul']; ?>"><br>
<textarea name="deskripsi"><?php echo $d['deskripsi']; ?></textarea><br>
<input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"><br>

<img src="../uploads/<?php echo $d['gambar']; ?>" width="120"><br>
<input type="file" name="gambar"><br>

<button>Update</button>
</form>