<!DOCTYPE html>
<html>
<head>
  <title>Save Mail | BPHN</title>
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
      <h1 class="judul">KEHUMASAN DAN HUKUM (HH)</h1>
      <form action="mail-hh.php">
        <table>
          <tr>
            <td><input class="input" type="submit" value="LIHAT SURAT"></td>
          </tr>
        </table>
      </form>
      <?php
        include '../../koneksi.php';
        $Tanggal = $_POST['Tanggal'];    
        $Perihal = $_POST['Perihal']; 
        $Asal_Surat = $_POST['Asal_Surat']; 
        $var = $_POST['var'];
        $kode = $_POST['kode'];
        $no = $_POST['no'];
    
        $No_Urut = "$var-$kode-$no";

        $sql = "INSERT INTO HH " .
         "(Tanggal, Perihal, Asal_Surat, No_Urut) " .
         "VALUES('$Tanggal', '$Perihal', '$Asal_Surat','$No_Urut')";
        $hasil = mysqli_query($koneksi, $sql);
        if (empty($hasil))
            print("<h3><center> Gagal menyimpan surat $No_Urut</center></h3>");
        else
            print("<h3><center> Surat $No_Urut telah disimpan </center></h3> ");   
  
        mysqli_close($koneksi);
      ?>
    </div>

    <div class="footer">
      <p class="copy">Copyright &copy; 2019 Rizky-Putra-Itaji</p>
    </div>
  </div>

</body>
</html>