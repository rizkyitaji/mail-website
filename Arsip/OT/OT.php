<!DOCTYPE html>
<html>
<head>
	<title>Info OT | BPHN</title>
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
			<h1 class="judul">ORGANISASI DAN TATA LAKSANA</h1>
			<center>
				<table class="arsip">
					<thead>
						<tr>
							<th>Kode Klasifikasi</th>
							<th>Jenis Arsip</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="td">OT</td>
							<td class="td">ORGANISASI DAN TATA LAKSANA</td>
						</tr>
						<tr>
							<td class="td1">OT 01</td>
							<td class="td1">Organisasi dan Tata Kerja</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Organisasi dan Tata Kerja Kementerian</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Organisasi dan Tata Kerja Kantor Wilayah</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Organisasi dan Tata Kerja UPT</td>
						</tr>
						<tr>
							<td class="td1">01.04</td>
							<td class="td1">Evaluasi Kelembagaan</td>
						</tr>
						<tr>
							<td class="td">OT 02</td>
							<td class="td">Ketatalaksanaan</td>
						</tr>
						<tr>
							<td class="td1">02.01</td>
							<td class="td1">Standarisasi Sarana Kerja</td>
						</tr>
						<tr>
							<td class="td">02.02</td>
							<td class="td">Sistem, Prosedur, dan Metode Kerja</td>
						</tr>
						<tr>
							<td class="td1">02.03</td>
							<td class="td1">Analisa dan Uraian Jabatan</td>
						</tr>
						<tr>
							<td class="td">OT 03</td>
							<td class="td">Reformasi Birokrasi</td>
						</tr>
						<tr>
							<td class="td1">OT 04</td>
							<td class="td1">Instruksi Menteri</td>
						</tr>
					</tbody>
				</table>
			</center>
		</div>

		<div class="footer">
			<p class="copy">Copyright &copy; 2019 Rizky-Putra-Itaji</p>
		</div>
	</div>

</body>
</html>