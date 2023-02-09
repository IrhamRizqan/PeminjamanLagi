<?php 
require "libs/database.php";
session_start();

if($_SESSION['status']!="sudah_login"){
    header("location: login.php");
}

$all = mysqli_query($con, "SELECT * FROM `barang`");
mysqli_fetch_array($all);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
</head>
<body>
    <h1>Hi, <?php echo $_SESSION['username']; ?></h1>
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td>Jumlah Barang</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php 
        foreach($all as $data){
        ?>
        <tr>
            <?php $data['id_barang']; ?>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['jumlah_barang']; ?></td>
            <td colspan="2"><button><a style="text-decoration: none; color=black;" href="deleteBarang.php?id=<?php echo $data['id_barang'];?>">Delete</a></button><button><a href="editBarang.php?idbarang=<?php echo $data['id_barang'];?>">Edit</a></button></td>
        </tr>
        <?php } ?>
    </table>
    <br><br><button><a href="add_barang.php" style="text-decoration: none; color: black;">Tambah Barang</a></button>
</body>
</html>