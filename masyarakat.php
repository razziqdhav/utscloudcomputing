<?php include 'koneksi.php'; include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Masyarakat</title>

<style>
body {
  margin:0;
  font-family:'Segoe UI', sans-serif;
  background:#eef2f7;
}

/* SIDEBAR */
.sidebar {
  width:240px;
  height:100vh;
  background:#2e7d32;
  color:white;
  position:fixed;
  padding:25px;
}

.sidebar h2 {
  margin-bottom:40px;
}

.sidebar a {
  display:block;
  color:white;
  text-decoration:none;
  margin:15px 0;
  padding:10px;
  border-radius:8px;
  transition:0.3s;
}

.sidebar a:hover {
  background:rgba(255,255,255,0.2);
}

/* MAIN */
.main {
  margin-left:260px;
  padding:40px;
}

/* HEADER */
.header {
  background:white;
  padding:20px;
  border-radius:12px;
  box-shadow:0 4px 10px rgba(0,0,0,0.05);
  margin-bottom:30px;
}

/* CARD FORM */
.card {
  background:white;
  padding:30px;
  border-radius:15px;
  box-shadow:0 8px 25px rgba(0,0,0,0.08);
  max-width:600px;
}

/* INPUT */
input, textarea {
  width:100%;
  padding:12px;
  margin:10px 0;
  border-radius:8px;
  border:1px solid #ccc;
  outline:none;
  transition:0.3s;
}

input:focus, textarea:focus {
  border-color:#2e7d32;
  box-shadow:0 0 5px rgba(46,125,50,0.3);
}

/* BUTTON */
button {
  background:#2e7d32;
  color:white;
  padding:12px;
  border:none;
  border-radius:8px;
  cursor:pointer;
  font-weight:bold;
  transition:0.3s;
}

button:hover {
  background:#1b5e20;
}
</style>

</head>

<body>

<div class="sidebar">
  <h2>LaporSampah</h2>
  <a href="#">🏠 Dashboard</a>
  <a href="logout.php">🚪 Logout</a>
</div>

<div class="main">

  <div class="header">
    <h2>Buat Laporan Sampah</h2>
    <p>Laporkan lokasi sampah liar agar segera ditangani.</p>
  </div>

  <div class="card">
    <form action="tambah.php" method="POST" enctype="multipart/form-data">
      <label>Nama</label>
      <input type="text" name="nama" placeholder="Masukkan nama anda" required>

      <label>Deskripsi Lokasi</label>
      <textarea name="deskripsi" placeholder="Contoh: Di pinggir jalan dekat pasar..." required></textarea>

      <label>Upload Foto</label>
      <input type="file" name="foto" required>

      <button>Kirim Laporan</button>
    </form>
  </div>

</div>

</body>
</html>