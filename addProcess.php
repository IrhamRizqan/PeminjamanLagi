<?php 
include "libs/database.php";

$namaBarang = $_POST['namaBarang'];
$jumlahBarang = $_POST['jumlahBarang'];

$inputBarang = mysqli_query($con, "INSERT INTO `barang`(`nama_barang`, `jumlah_barang`) VALUES ('$namaBarang','$jumlahBarang')");

header("location: dashboard.php");
?>