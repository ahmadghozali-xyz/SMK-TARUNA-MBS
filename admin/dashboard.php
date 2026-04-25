<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include "../config/koneksi.php";

// statistik
$total = mysqli_query($conn, "SELECT COUNT(*) as total FROM kegiatan");
$t = mysqli_fetch_assoc($total);

// data kegiatan
$data = mysqli_query($conn, "SELECT * FROM kegiatan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
  margin:0;
  font-family:Poppins;
  display:flex;
  background:#f4f7f6;
}

/* SIDEBAR */
.sidebar{
  width:230px;
  height:100vh;
  background:#1b4332;
  color:white;
  padding:20px;
  position:fixed;
}

.sidebar h2{
  text-align:center;
  margin-bottom:30px;
}

.sidebar a{
  display:block;
  color:white;
  text-decoration:none;
  padding:10px;
  margin:5px 0;
  border-radius:6px;
  transition:0.3s;
}

.sidebar a:hover{
  background:#2d6a4f;
}

/* CONTENT */
.main{
  margin-left:250px;
  padding:20px;
  width:100%;
}

.header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:20px;
}

/* CARD STAT */
.card{
  background:white;
  padding:20px;
  border-radius:10px;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
  margin-bottom:20px;
}

/* TABLE */
table{
  width:100%;
  border-collapse:collapse;
  background:white;
}

th, td{
  padding:12px;
  border-bottom:1px solid #ddd;
  text-align:left;
}

th{
  background:#2d6a4f;
  color:white;
}

img{
  border-radius:8px;
}

/* BUTTON */
.btn{
  padding:6px 10px;
  border:none;
  cursor:pointer;
  border-radius:5px;
  text-decoration:none;
  color:white;
}

.edit{background:#40916c}
.delete{background:#e63946}

.top-btn{
  background:#2d6a4f;
  padding:10px 15px;
  color:white;
  border-radius:6px;
  text-decoration:none;
}
</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>Admin MBS</h2>

  <a href="#">Dashboard</a>
  <a href="tambah_kegiatan.php">Tambah Kegiatan</a>
  <a href="logout.php">Logout</a>
</div>

<!-- MAIN -->
<div class="main">

  <div class="header">
    <h2>Dashboard</h2>
    <a class="top-btn" href="tambah_kegiatan.php">+ Tambah</a>
  </div>

  <!-- STAT -->
  <div class="card">
    <h3>Total Kegiatan</h3>
    <h1><?php echo $t['total']; ?></h1>
  </div>

  <!-- TABLE -->
  <div class="card">
    <h3>Data Kegiatan</h3>

    <table>
      <tr>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>

      <?php while($d = mysqli_fetch_array($data)){ ?>
      <tr>
        <td>
          <img src="../uploads/<?php echo $d['gambar']; ?>" width="80">
        </td>
        <td><?php echo $d['judul']; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
        <td>
          <a class="btn edit" href="edit_kegiatan.php?id=<?php echo $d['id']; ?>">Edit</a>
          <a class="btn delete" href="hapus_kegiatan.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

</body>
</html>