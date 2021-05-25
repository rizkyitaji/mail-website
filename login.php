<!DOCTYPE html>
<html>
<head>
  <title>---LOGIN---</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<center>
<div class="kotak">
  <p class="tulisan">SIGN IN</p>
  <form method="post" action="cek_login.php">
    <table>
      <tr>
        <td><input type="text" class="form" name="ID" placeholder="Masukkan Username" size="30" maxlength="30" required></td>
      </tr>
      <tr>
        <td><input type="password" class="form" name="Password" placeholder="Masukkan Password" size="30" maxlength="30" required></td>
      </tr>
      <tr>
        <td><input type="submit" class="tombol" value="SIGN IN"></td>
      </tr>
    </table>
    <center>
      <a class="reg" href="register.php" target="formreg">Register</a>
    </center>
    <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<h5 class=\"pesan\">Login gagal! Username atau Password salah!</h5>";
      }else if($_GET['pesan'] == "logout"){
        echo "<h5 class=\"sukses\">Anda telah berhasil logout!</h5>";
      }else if($_GET['pesan'] == "belum_login"){
        echo "<h5 class=\"pesan\">Silakan login terlebih dahulu!</h5>";
      }
    }
    ?>   
  </form>
</div>
</center>
</body>
</html>