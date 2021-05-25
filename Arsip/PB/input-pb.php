<?php
  include '../../koneksi.php';
    //penomoran otomatis start here
    $urut = mysqli_query($koneksi,"SELECT max(No_Urut) as maxNo FROM PB");
    $urut1 = mysqli_fetch_array($urut);
    $urut2 = $urut1['maxNo'];
      if(strlen($urut2) == 15){ //untuk PHN
        $urut3 = substr($urut2, 13, 2);
        $tambah = (int) $urut3 + 1;

        if(strlen($tambah) == 1){
            $format = "0".$tambah;
        } else if(strlen($tambah) == 2){
            $format = $tambah;
        }
      } else { //untuk PHN1
        $urut3 = substr($urut2, 14, 2);
        $tambah = (int) $urut3 + 1;

        if(strlen($tambah) == 1){
            $format = "0".$tambah;
        } else if(strlen($tambah) == 2){
            $format = $tambah;
        }
      }
    //end here
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Mail-PB | BPHN</title>
  <link rel="stylesheet" type="text/css" href="../../page.css">
  <style type="text/css">
    .form1 {
      padding: 10px;
      padding-left: 11px;
    }

    .form2 {
      padding: 10px;
      padding-left: 12px;
    }

    .form3 {
      padding: 10px;
      padding-left: 12px;
    }
  </style>
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
      <h1 class="judul">PENGELOLAAN BARANG MILIK NEGARA (PB)</h1>
      <form action="mail-pb.php">
        <table>
          <tr>
            <td><input class="input" type="submit" value="LIHAT SURAT"></td>
          </tr>
        </table>
      </form>
      <form action="save-pb.php" method="POST">
        <table class="tabel">
          <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input class="form" name="Tanggal" type="text" placeholder="dd-mm-yyyy" size="90" maxlength="90" required></td>
          </tr>
          <tr>
            <td>Perihal</td>
            <td>:</td>
            <td><input class="form" name="Perihal" type="text" placeholder="Masukkan Perihal" size="90" maxlength="1000" required></td>
          </tr>
          <tr>
            <td>Asal Surat</td>
            <td>:</td>
            <td><input class="form" name="Asal_Surat" type="text" placeholder="Masukkan Asal Surat" size="90" maxlength="90" required></td>
          </tr>
          <tr>
            <td>No. Urut</td>
            <td>:</td>
            <td><input class="form1" name="var" type="text" placeholder="PHN/PHN1" size="25" maxlength="25" required> - <input name="kode" type="text" placeholder="PB.01.01" class="form2" size="25" maxlength="25" required> - <input class="form3" name="no" type="text" value="<?php echo $format; ?>" size="20" maxlength="20" required></td>
          </tr>
          <tr> 
            <td colspan="2"><input class="tombol" type="reset" name="reset" value="RESET"></td>
            <td><input class="tombol" type="submit" name="save" value="SAVE"></td>
          </tr>
        </table>
      </form>
    </div>

    <div class="footer">
      <p class="copy">Copyright &copy; 2019 Rizky-Putra-Itaji</p>
    </div>
  </div>

</body>
</html>