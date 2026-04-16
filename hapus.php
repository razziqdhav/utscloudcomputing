<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM laporan WHERE id=$id");

header("Location: admin.php");
?>