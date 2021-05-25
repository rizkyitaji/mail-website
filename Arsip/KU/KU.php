<!DOCTYPE html>
<html>
<head>
	<title>Info KU | BPHN</title>
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
			<h1 class="judul">KEUANGAN</h1>
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
							<td class="td">KU</td>
							<td class="td">KEUANGAN</td>
						</tr>
						<tr>
							<td class="td1">KU 01</td>
							<td class="td1">Pelaksanaan Anggaran</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Pedoman, Petunjuk, dan Administrasi Pelaksanaan Anggaran</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Daftar Isian Pelaksanaan Anggaran (DIPA)</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Penerimaan Negara Bukan Pajak (PNBP)</td>
						</tr>
						<tr>
							<td class="td1">KU 02</td>
							<td class="td1">Penerimaan Negara</td>
						</tr>
						<tr>
							<td class="td">02.01</td>
							<td class="td">Pajak</td>
						</tr>
						<tr>
							<td class="td1">02.02</td>
							<td class="td1">Bukan Pajak</td>
						</tr>
						<tr>
							<td class="td">KU 03</td>
							<td class="td">Tata Usaha Keuangan</td>
						</tr>
						<tr>
							<td class="td1">03.01</td>
							<td class="td1">Pedoman dan Petunjuk Administrasi Keuangan</td>
						</tr>
						<tr>
							<td class="td">03.02</td>
							<td class="td">Penerimaan Hibah</td>
						</tr>
						<tr>
							<td class="td1">03.03</td>
							<td class="td1">Pengelola Keuangan</td>
						</tr>
						<tr>
							<td class="td">03.04</td>
							<td class="td">Penyelesaian Kerugian Negara</td>
						</tr>
						<tr>
							<td class="td1">KU 04</td>
							<td class="td1">Perbendaharaan</td>
						</tr>
						<tr>
							<td class="td">04.01</td>
							<td class="td">Surat Permintaan Pembayaran dan Surat Perintah Membayar</td>
						</tr>
						<tr>
							<td class="td1">04.02</td>
							<td class="td1">Buku Kas Umum dan Buku Pembantu</td>
						</tr>
						<tr>
							<td class="td">04.03</td>
							<td class="td">LPJ Bendahara Pengeluaran</td>
						</tr>
						<tr>
							<td class="td1">04.04</td>
							<td class="td1">LPJ Bendahara Penerimaan</td>
						</tr>
						<tr>
							<td class="td">KU 05</td>
							<td class="td">Akuntansi dan Pelaporan</td>
						</tr>
						<tr>
							<td class="td1">05.01</td>
							<td class="td1">Laporan Keuangan</td>
						</tr>
						<tr>
							<td class="td">05.02</td>
							<td class="td">Rekonsiliasi dan Data Laporan Keuangan</td>
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