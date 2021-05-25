<!DOCTYPE html>
<html>
<head>
	<title>Home | BPHN</title>
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
  ?>
	<div class="menu">
		<header>
			<img class="img" src="img/logo.jpg" width="130px" height="130px">
  			<h1>Badan Pembinaan Hukum Nasional</h1>
  			<h2>Kementerian Hukum dan HAM RI</h2>
  		</header>
		
		<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="mail.php">Mail</a></li>
				<li><a href="">Archieve Mail</a>
					<ul>
						<li><a href="Arsip/PR/PR.php" class="sub">- Perencanaan</a></li>
						<li><a href="Arsip/OT/OT.php" class="sub">- Organisasi Dan Tata Laksana</a></li>
						<li><a href="Arsip/KP/KP.php" class="sub">- Kepegawaian</a></li>
						<li><a href="Arsip/KU/KU.php" class="sub">- Keuangan</a></li>
						<li><a href="Arsip/PB/PB.php" class="sub">- Pengelolaan Barang Milik Negara</a></li>
						<li><a href="Arsip/HH/HH.php" class="sub">- Kehumasan Dan Hukum</a></li>
						<li><a href="Arsip/UM/UM.php" class="sub">- Umum</a></li>
						<li><a href="Arsip/PW/PW.php" class="sub">- Pengawasan</a></li>
						<li><a href="Arsip/TI/TI.php" class="sub">- Data Dan Informasi</a></li>
					</ul>
				</li>
				<li><a href="about.php">About</a></li>
				<li><a href="logout.php" onclick="return confirm('Anda yakin ingin logout?')">SIGN OUT</a></li>
			</ul>
		</div>

		<div class="isi">
			<marquee height="20px" bgcolor="lime" scrollamount="10">SELAMAT DATANG!</marquee>
			<div class="welcome">
				<img class="pict" src="img/logo.jpg">
				<img class="pict" src="img/wlcm.png">
				<img class="pict" src="img/pasti.png">
			</div>
		</div>

		<div class="footer">
			<p class="copy">Copyright &copy; 2019 Rizky-Putra-Itaji</p>
		</div>
	</div>

</body>
</html>