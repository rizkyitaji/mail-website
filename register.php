<!DOCTYPE html>
<html>
<head>
	<title> ---REGISTER--- </title>
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
 	<h5 class="reg">Sudah memiliki akun? Login <a href="login.php" class="link">di sini</a></h5>
	</form>
</div>
</center>	
</body>
</html>