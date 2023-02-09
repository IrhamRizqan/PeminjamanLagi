<?php
require "libs/database.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$hasil = mysqli_query($con, "SELECT * FROM `tb_user` WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($hasil);
if($cek>0){
    $datas = mysqli_fetch_assoc($hasil);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id_user'];
    header("location: dashboard.php");
} else{
    header("location: login.php?pesan=ERROR!? cek username dan password!");
}
?>