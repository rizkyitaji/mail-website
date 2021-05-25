<!DOCTYPE html>
<html>
<head>
  <title>Delete Mail | BPHN</title>
  <link rel="stylesheet" type="text/css" href="../../page.css">
</head>
<body>
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../../login.php?pesan=belum_login");
  }
  ?>
  <div class="menu">
    <header>
        <img class="img" src="../../img/logo.jpg" width="130px" height="130px">
        <h1>Badan Pembinaan Hukum Nasional</h1>
        <h2>Kementerian Hukum dan HAM RI</h2>
    </header>
    <div class="nav">
      <ul>
        <li><a href="../../home.php">Home</a></li>
        <li><a href="../../mail.php">Mail</a></li>
        <li><a href="">Archieve Mail</a>
          <ul>
            <li><a href="../PR/PR.php" class="sub">- Perencanaan</a></li>
            <li><a href="../OT/OT.php" class="sub">- Organisasi Dan Tata Laksana</a></li>
            <li><a href="../KP/KP.php" class="sub">- Kepegawaian</a></li>
            <li><a href="../KU/KU.php" class="sub">- Keuangan</a></li>
            <li><a href="../PB/PB.php" class="sub">- Pengelolaan Barang Milik Negara</a></li>
            <li><a href="../HH/HH.php" class="sub">- Kehumasan Dan Hukum</a></li>
            <li><a href="../UM/UM.php" class="sub">- Umum</a></li>
            <li><a href="../PW/PW.php" class="sub">- Pengawasan</a></li>
            <li><a href="../TI/TI.php" class="sub">- Data Dan Informasi</a></li>
          </ul>
        </li>
        <li><a href="../../about.php">About</a></li>
        <li><a href="../../logout.php" onclick="return confirm('Anda yakin ingin logout?')">SIGN OUT</a></li>
      </ul>
    </div>

    <div class="isi">
      <h1 class="judul">PENGAWASAN (PW)</h1>
      <form action="mail-pw.php">
        <table class="table">
          <tr>
            <td><input class="input" type="submit" value="LIHAT SURAT"></td>
          </tr>
        </table>
      </form>
      <?php
        include '../../koneksi.php';
        $Perihal = $_GET['kode'];    
        if (empty($Perihal))
          die("Invalid");

        $sql = "DELETE FROM PW WHERE Perihal = '$Perihal'";
        $hasil = mysqli_query($koneksi, $sql);
        if (mysqli_affected_rows($koneksi) > 0)
            print("<h3><center>Surat $Perihal telah dihapus.</center></h3>");   
        else   
            print("<h3><center>Gagal menghapus surat $Perihal</center></h3>");
  
        mysqli_close($koneksi);
      ?>
    </div>

    <div class="footer">
      <p class="copy">&copy; Copyright 2019. Rizky-Putra-Itaji</p>
    </div>
  </div>

</body>
</html>