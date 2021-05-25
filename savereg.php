<html>
<head>
  <title>Menyimpan Surat</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<center>
<div class="kotak">
<p class="tulisan">REGISTER</p> 
<form name="formreg" action="savereg.php" method="post" >
  <table>
  <tr>
    <td colspan="2"><input name="ID" type="text" class="form" placeholder="Masukkan Username" size="30" maxlength="30" required></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><input name="Password" type="text" class="form" placeholder="Masukkan Password" size="30" maxlength="30" required></td>
  </tr>
  <tr> 
    <td><input type="submit" class="tombol" name="simpan" value="Save"></td>
    <td><input type="reset" class="tombol" name="reset" value="Reset"></td>
  </tr>
  </table>
<p class="reg">Sudah memiliki akun? Login <a href="login.php" class="link">di sini</a></p>
  <?php
      $ID = $_POST['ID'];    
      $Password = $_POST['Password']; 
    
        include 'koneksi.php';  
        $sql = "INSERT INTO login " . 
               "(ID, Password) " . 
               "VALUES('$ID', '$Password')";
        $hasil = mysqli_query($koneksi, $sql);

        if (empty($hasil)){
            print("<h5 class=\"pesan\">Gagal menyimpan! Username $ID sudah ada!</h5>");
        } else {
            print("<h5 class=\"sukses\">Akun $ID telah disimpan. Silakan <a class=\"login\" href=\"login.php\"> Login </a></h5> ");    
        }

        mysqli_close($koneksi);
  
  ?>
</form>
</div>
  
</center>
</body>
</html>