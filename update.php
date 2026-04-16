<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM laporan WHERE id=$id"));

$status = $data['status'] == 'Menunggu' ? 'Dibersihkan' : 'Menunggu';

mysqli_query($conn,"UPDATE laporan SET status='$status' WHERE id=$id");

header("Location: admin.php");
?>
