<?php
// mengambil file koneksi.php
include_once("koneksi.php");

// mengambil id dari url
$id = $_GET['id'];

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($con, "update registration set is_deleted= '1' where id =$id");

// Setelah berhasil dihapus redirect ke index.php
header("Location:daftarPeserta.php");