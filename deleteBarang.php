<?php 
include 'libs/database.php';
$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM `barang` WHERE `id_barang` = '$id'");
if ($sql == TRUE) {
    echo "Data terhapus";
    header("location: dashboard.php");
} else {
    echo "Data tidak terhapus";
    ?><button><a style="text-decoration: none; color: black; " href="masukan_data.php">Kembali</a></button>
    <?php
}
?>