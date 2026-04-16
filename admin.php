<?php 
include 'koneksi.php'; 
include 'auth.php'; 

$data = mysqli_query($conn,"SELECT * FROM laporan");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>

<style>
body { font-family: Arial; margin:0; background:#f4f6f8; }
.header {
  background:#2e7d32;
  color:white;
  padding:15px;
}
.container { padding:20px; }

table {
  width:100%;
  border-collapse: collapse;
  background:white;
}
th {
  background:#2e7d32;
  color:white;
}
th, td {
  padding:10px;
  border:1px solid #ddd;
  text-align:center;
}
.btn {
  padding:5px 10px;
  background:#2e7d32;
  color:white;
  text-decoration:none;
}
</style>

</head>
<body>

<div class="header">
  <h2>Dashboard Admin</h2>
  <a href="logout.php" style="color:white;">Logout</a>
</div>

<div class="container">

<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>Deskripsi</th>
<th>Foto</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php $no=1; while($d=mysqli_fetch_assoc($data)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['deskripsi'] ?></td>
<td><img src="upload/<?= $d['foto'] ?>" width="80"></td>
<td>
<?php if($d['status']=="Menunggu"){ ?>
<span style="color:orange;">Menunggu</span>
<?php } else { ?>
<span style="color:green;">Dibersihkan</span>
<?php } ?>
</td>
<td>
<a class="btn" href="update.php?id=<?= $d['id'] ?>">Update</a>
<a class="btn" href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>