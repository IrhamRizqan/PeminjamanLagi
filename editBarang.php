<?php 
include "libs/database.php";
$id = $_GET['idbarang'];
$query = mysqli_query($con, "SELECT * FROM barang WHERE id_barang = $id");
$fetched = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang - Admin</title>
</head>
<body>
    <center><h2>Edit Barang</h2>
    <form action="" method="post">
        <input type="text" name="namaBarang" placeholder="Nama Barang" value="<?php echo $fetched['nama_barang'];?>"><br><br>
        <input type="number" name="jumlahBarang" placeholder="Jumlah Barang" value="<?php echo $fetched['jumlah_barang'];?>"><br><br>
        <input type="submit" name="kirim" value="kirim">
    </form></center>
</body>
</html>

<?php
if(isset($_POST['kirim'])){
    $nama_barang = $_POST['namaBarang'];
    $jumlah_barang = $_POST['jumlahBarang'];

    mysqli_query($con, "UPDATE barang SET nama_barang='$nama_barang', jumlah_barang='$jumlah_barang' WHERE id_barang ='$id'");
    header ("location: dashboard.php");
}
?>