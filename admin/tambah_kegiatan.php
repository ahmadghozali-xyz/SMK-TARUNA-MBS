<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Kegiatan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
  font-family:Poppins;
  background:#f4f7f6;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}

.container{
  background:white;
  padding:30px;
  border-radius:15px;
  width:400px;
  box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

h2{
  text-align:center;
  color:#2d6a4f;
}

.input-group{
  margin-bottom:15px;
}

label{
  font-size:14px;
  color:#555;
}

input, textarea{
  width:100%;
  padding:12px;
  border-radius:8px;
  border:1px solid #ccc;
  margin-top:5px;
  font-size:14px;
}

input:focus, textarea:focus{
  border-color:#2d6a4f;
  outline:none;
}

button{
  width:100%;
  padding:12px;
  background:#2d6a4f;
  color:white;
  border:none;
  border-radius:8px;
  cursor:pointer;
  margin-top:10px;
}

button:hover{
  background:#1b4332;
}

/* preview gambar */
.preview{
  width:100%;
  margin-top:10px;
  border-radius:10px;
  display:none;
}
</style>
</head>
<body>

<div class="container">
<h2>Tambah Kegiatan</h2>

<form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

<div class="input-group">
<label>Judul Kegiatan</label>
<input type="text" name="judul" required>
</div>

<div class="input-group">
<label>Deskripsi</label>
<textarea name="deskripsi" rows="4" required></textarea>
</div>

<div class="input-group">
<label>Tanggal Kegiatan</label>
<input type="date" name="tanggal" required>
</div>

<div class="input-group">
<label>Upload Gambar</label>
<input type="file" name="gambar" accept="image/*" onchange="previewImage(event)">
<img id="preview" class="preview">
</div>

<button type="submit">Simpan</button>

</form>
</div>

<script>
function previewImage(event){
  const reader = new FileReader();
  reader.onload = function(){
    const output = document.getElementById('preview');
    output.src = reader.result;
    output.style.display = 'block';
  }
  reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>
</html>