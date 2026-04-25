# 🎓 SMK Taruna MBS Website

Website resmi **SMK Taruna MBS** yang dibangun menggunakan teknologi sederhana namun powerful (HTML, CSS, JavaScript, PHP Native, dan MySQL).
Project ini dirancang dengan tampilan modern, minimalis, serta nuansa hijau yang mencerminkan kedisiplinan dan profesionalisme.

---

## 🚀 Fitur Utama

### 🌐 Frontend (User)

* 🏠 Halaman Beranda modern dengan hero slider
* 🎯 Visi, Misi, dan Tujuan sekolah
* 📰 Kegiatan / Berita sekolah (dynamic dari database)
* 🏫 Struktur Organisasi
* 🖼️ Galeri Foto sekolah
* 📍 Halaman Kontak + Google Maps
* 🌙 Desain responsif (mobile & desktop)
* ✨ Animasi smooth & interaktif

---

### 🔐 Admin Dashboard

* 🔑 Login Admin (authentication)
* 📊 Dashboard modern dengan sidebar
* ➕ Tambah kegiatan (upload gambar)
* ✏️ Edit kegiatan
* 🗑️ Hapus kegiatan
* 🖼️ Upload & manajemen gambar kegiatan
* 📈 Statistik jumlah kegiatan

---

## 🛠️ Teknologi yang Digunakan

* **Frontend**

  * HTML5
  * CSS3
  * JavaScript

* **Backend**

  * PHP Native

* **Database**

  * MySQL

* **Environment**

  * Laragon (Local Development)
  * GitHub (Version Control)

---

## 📁 Struktur Folder

```
smk-taruna-mbs/
│
├── admin/                # Dashboard Admin
├── config/               # Koneksi database
├── uploads/              # Penyimpanan gambar
├── assets/               # CSS, JS, Images
├── index.php             # Halaman utama
├── struktur.html         # Struktur organisasi
├── galeri.html           # Galeri
├── kontak.html           # Kontak
```

---

## ⚙️ Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/username/smk-taruna-mbs.git
```

### 2. Pindahkan ke Laragon

Letakkan folder ke:

```
C:\laragon\www\
```

### 3. Import Database

* Buka **phpMyAdmin**
* Buat database: `smk_mbs`
* Jalankan SQL berikut:

```sql
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

INSERT INTO admin (username, password)
VALUES ('admin', MD5('admin123'));

CREATE TABLE kegiatan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(255),
  deskripsi TEXT,
  gambar VARCHAR(255),
  tanggal DATE
);
```

### 4. Jalankan di Browser

```
http://localhost/smk-taruna-mbs
```

---

## 🔑 Login Admin

```
Username: admin
Password: admin123
```

Akses:

```
http://localhost/smk-taruna-mbs/admin/login.php
```

---

## 🎨 Konsep Desain

* Warna utama: Hijau (Army Style)
* Clean & minimalis
* Fokus pada UX/UI modern
* Lightweight & cepat diakses

---

## 📌 Catatan

Project ini masih bisa dikembangkan lebih lanjut, seperti:

* Detail halaman kegiatan
* Sistem manajemen galeri dari admin
* Multi user admin
* Keamanan login yang lebih advanced

---

## 👨‍💻 Developer

Dibuat oleh:
**Ahmad Ghozali**
Mahasiswa Informatika Engineering

---

## ⭐ Penutup

Project ini dibuat sebagai latihan sekaligus portfolio dalam pengembangan website sekolah berbasis PHP Native dengan konsep modern UI.

Jika project ini membantu, jangan lupa ⭐ repository ini!
