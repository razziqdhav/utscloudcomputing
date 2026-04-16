<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM laporan");
?>

<table>
<tr>
<th>No</th><th>Nama</th><th>Deskripsi</th><th>Foto</th><th>Status</th>
</tr>

<?php $no=1; while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['deskripsi'] ?></td>
<td><img src="upload/<?= $d['foto'] ?>" width="80"></td>
<td><?= $d['status'] ?></td>
</tr>
<?php } ?>

</table>