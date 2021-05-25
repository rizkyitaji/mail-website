<?php 
// mengaktifkan session php
session_start();
include 'koneksi.php';
// menangkap data yang dikirim dari form
$ID = $_POST['ID'];
$Password = ($_POST['Password']);

$sql = "SELECT *from login where ID='$ID' and Password='$Password'";
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,$sql);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['ID'] = $ID;
  $_SESSION['status'] = "login";
  header("location:home.php");
}else{
  header("location:login.php?pesan=gagal");
}
?>