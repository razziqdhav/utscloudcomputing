<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "upload/".$foto);

mysqli_query($conn,"INSERT INTO laporan (nama,deskripsi,foto,status) 
VALUES ('$nama','$deskripsi','$foto','Menunggu')");

header("Location: masyarakat.php");
?>