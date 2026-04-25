<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMK Taruna MBS</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
:root{
  --green:#2d6a4f;
  --light:#d8f3dc;
  --dark:#1b4332;
}

*{margin:0;padding:0;box-sizing:border-box}

html{scroll-behavior:smooth;}

/* SCROLLBAR */
::-webkit-scrollbar{width:8px}
::-webkit-scrollbar-thumb{
  background:var(--green);
  border-radius:10px;
}

/* BODY */
body{
  font-family:Poppins;
  background:#fff;
}

/* NAVBAR */
.navbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:15px 40px;
  background:white;
  position:sticky;
  top:0;
  box-shadow:0 2px 10px rgba(0,0,0,0.1);
  z-index:999;
}

.logo{
  display:flex;
  align-items:center;
  gap:10px;
  font-weight:700;
  color:var(--green);
  transition:0.3s;
}

.logo:hover{transform:scale(1.05);}
.logo img{width:35px}

nav a{
  margin:0 12px;
  text-decoration:none;
  color:var(--green);
  position:relative;
}

nav a::after{
  content:'';
  position:absolute;
  width:0%;
  height:2px;
  background:var(--green);
  left:0;
  bottom:-5px;
  transition:0.3s;
}

nav a:hover::after{width:100%;}

/* HERO */
.hero{
  position:relative;
  height:90vh;
  overflow:hidden;
}

.slide{
  position:absolute;
  width:100%;
  height:100%;
  background-size:cover;
  background-position:center;
  opacity:0;
  transition:1s;
}

.slide.active{opacity:1}

.overlay{
  position:absolute;
  width:100%; height:100%;
  background:rgba(27,67,50,0.7);
}

.hero-content{
  position:absolute;
  top:50%; left:50%;
  transform:translate(-50%,-50%);
  text-align:center;
  color:white;
  z-index:2;
}

.hero h1{font-size:48px;}

.btn{
  margin-top:20px;
  padding:12px 25px;
  background:#40916c;
  border:none;
  color:white;
  cursor:pointer;
  border-radius:5px;
}

.btn:hover{background:#2d6a4f}

/* SLIDER BUTTON */
.btn-slide{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  background:rgba(0,0,0,0.5);
  color:white;
  border:none;
  padding:10px;
  cursor:pointer;
  z-index:3;
}

.prev{left:10px}
.next{right:10px}

/* SECTION */
.section{
  padding:45px 20px;
  max-width:1100px;
  margin:auto;
}

h2{
  text-align:center;
  color:var(--green);
  margin-bottom:30px;
}

.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:20px;
}

/* CARD */
.card{
  background:var(--light);
  padding:20px;
  border-radius:10px;
  transition:0.3s;
}

.card:hover{transform:translateY(-5px);}

/* ANIMATION */
.fade{
  opacity:0;
  transform:translateY(40px);
  transition:1s;
}

.fade.show{
  opacity:1;
  transform:none;
}

/* FOOTER */
.footer{
  background:linear-gradient(135deg,#1b4332,#2d6a4f);
  color:white;
  padding:50px 20px 20px;
  margin-top:50px;
  position:relative;
}

.footer::before{
  content:'';
  position:absolute;
  top:0;
  width:100%;
  height:4px;
  background:linear-gradient(to right,#d4af37,#ffd700,#d4af37);
}

.footer-container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
  max-width:1100px;
  margin:auto;
}

.footer-box h3{
  margin-bottom:10px;
  color:#ffd700;
}

.footer-box a{
  display:block;
  color:white;
  text-decoration:none;
  margin:5px 0;
}

.footer-box a:hover{
  color:#ffd700;
  transform:translateX(5px);
}

.footer-bottom{
  text-align:center;
  margin-top:30px;
  border-top:1px solid rgba(255,255,255,0.2);
  padding-top:15px;
}
/* VISI DESIGN */
.visi-box{
  background:linear-gradient(135deg,#d8f3dc,#b7e4c7);
  padding:30px;
  border-radius:15px;
  text-align:center;
  max-width:800px;
  margin:auto;
  box-shadow:0 10px 30px rgba(0,0,0,0.1);
  position:relative;
}

.visi-icon{
  font-size:40px;
  margin-bottom:10px;
}

.visi-box p{
  font-size:18px;
  line-height:1.8;
}

.visi-box span{
  color:#1b4332;
  font-weight:600;
}
/* KEGIATAN MODERN */
.kegiatan-card{
  position:relative;
  overflow:hidden;
  border-radius:15px;
  cursor:pointer;
  box-shadow:0 10px 30px rgba(0,0,0,0.15);
  transition:0.4s;
  background:#000;
}

.kegiatan-card img{
  width:100%;
  height:230px;
  object-fit:cover;
  transition:0.5s;
}

/* overlay */
.kegiatan-overlay{
  position:absolute;
  bottom:0;
  left:0;
  width:100%;
  padding:20px;
  background:linear-gradient(to top, rgba(0,0,0,0.8), transparent);
  color:white;
}

/* judul */
.kegiatan-overlay h3{
  margin:0;
  font-size:18px;
}

/* tanggal */
.kegiatan-overlay span{
  font-size:12px;
  opacity:0.8;
}

/* hover effect */
.kegiatan-card:hover img{
  transform:scale(1.1);
}

.kegiatan-card:hover{
  transform:translateY(-8px);
  box-shadow:0 20px 40px rgba(0,0,0,0.2);
}
/* garis aksen */
.visi-box::before{
  content:'';
  position:absolute;
  width:60px;
  height:4px;
  background:#2d6a4f;
  top:-10px;
  left:50%;
  transform:translateX(-50%);
  border-radius:5px;
}
</style>
</head>

<body>

<header class="navbar">
  <div class="logo">
    <img src="assets/images/logo.jpg">
    SMK TARUNA MBS
  </div>

  <nav>
    <a href="#">Beranda</a>
    <a href="#visi">Visi</a>
    <a href="#kegiatan">Kegiatan</a>
    <a href="struktur.html">Struktur</a>
    <a href="galeri.html">Galeri</a>
    <a href="kontak.html">Kontak</a>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <div class="slide active" style="background-image:url('assets/images/cover.jpeg')"></div>
  <div class="slide" style="background-image:url('assets/images/depan2.jpeg')"></div>
  <div class="slide" style="background-image:url('assets/images/depan3.jpeg')"></div>

  <div class="overlay"></div>

  <button class="btn-slide prev" onclick="prevSlide()">❮</button>
  <button class="btn-slide next" onclick="nextSlide()">❯</button>

  <div class="hero-content">
    <h1>SMK TARUNA MBS</h1>
    <p>ASAH KETERAMPILAN, ASUH AKHLAK,<br>SUKSES DUNIA, BAHAGIA AKHIRAT</p>
    <button class="btn" onclick="window.location.href='kontak.html'">Daftar Sekarang</button>
  </div>
</section>

<section id="visi" class="section fade">
  <h2>Visi Sekolah</h2>

  <div class="visi-box">
    <div class="visi-icon">🎓</div>

    <p>
      Mewujudkan <span>SMK Boarding Modern</span> yang mencetak 
      <span>entrepreneur</span>, <span>disiplin</span>, 
      <span>terampil</span>, <span>berprestasi</span>, 
      dan <span>berakhlak mulia</span>.
    </p>
  </div>
</section>

<section class="section fade">
  <h2>Misi</h2>
  <div class="grid">
    <div class="card">Budaya Islami</div>
    <div class="card">Patriotisme</div>
    <div class="card">Kerja sama industri</div>
    <div class="card">Kreativitas</div>
    <div class="card">Teknologi ramah lingkungan</div>
    <div class="card">Berdaya saing</div>
  </div>
</section>

<section class="section fade">
  <h2>Tujuan</h2>
  <div class="grid">
    <div class="card">Beriman & bertaqwa</div>
    <div class="card">Profesional</div>
    <div class="card">Kreatif</div>
    <div class="card">Entrepreneur</div>
  </div>
</section>

<section id="kegiatan" class="section fade">
  <h2>Kegiatan</h2>
  <div class="grid">

<?php
$data = mysqli_query($conn,"SELECT * FROM kegiatan ORDER BY id DESC");
while($d = mysqli_fetch_array($data)){
?>

<div class="kegiatan-card">

  <img src="uploads/<?php echo $d['gambar']; ?>">

  <div class="kegiatan-overlay">
    <span><?php echo $d['tanggal']; ?></span>
    <h3><?php echo $d['judul']; ?></h3>
  </div>

</div>

<?php } ?>

</div>
</section>

<section class="section fade">
  <h2>Jurusan</h2>
  <div class="grid">
    <div class="card">Farmasi</div>
    <div class="card">Mekatronika</div>
    <div class="card">TKR</div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-box">
      <h3>SMK Taruna MBS</h3>
      <p>Membentuk generasi disiplin dan berakhlak mulia.</p>
    </div>

    <div class="footer-box">
      <h3>Kontak</h3>
      <p>0812 7642 668</p>
      <p>0852 6554 4478</p>
    </div>

    <div class="footer-box">
      <h3>Menu</h3> <a href="#">Beranda</a> 
      <a href="#visi">Visi</a> 
      <a href="#kegiatan">Kegiatan</a> 
      <a href="struktur.html">Struktur</a> 
      <a href="galeri.html">Galeri</a> 
      <a href="kontak.html">Kontak</a>
    </div>
  </div>

  <div class="footer-bottom">
    © 2026 SMK Taruna MBS
  </div>
</footer>

<script>
// SLIDER
let slides=document.querySelectorAll('.slide');
let index=0;

function showSlide(i){
  slides.forEach(s=>s.classList.remove('active'));
  slides[i].classList.add('active');
}

function nextSlide(){
  index=(index+1)%slides.length;
  showSlide(index);
}

function prevSlide(){
  index=(index-1+slides.length)%slides.length;
  showSlide(index);
}

setInterval(nextSlide,4000);

// ANIMATION
let items=document.querySelectorAll('.fade');
window.addEventListener('scroll',()=>{
  items.forEach(el=>{
    let top=el.getBoundingClientRect().top;
    if(top<window.innerHeight-100){
      el.classList.add('show');
    }
  });
});
</script>

</body>
</html>