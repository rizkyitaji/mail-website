<!DOCTYPE html>
<html>
<head>
	<title>Info HH | BPHN</title>
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
			<h1 class="judul">KEHUMASAN DAN HUKUM</h1>
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
							<td class="td">HH</td>
							<td class="td">KEHUMASAN DAN HUKUM</td>
						</tr>
						<tr>
							<td class="td1">HH 01</td>
							<td class="td1">Informasi dan Komunikasi</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Pencitraan</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Kunjungan</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Media Massa (Cetak, Elektronik)</td>
						</tr>
						<tr>
							<td class="td1">01.04</td>
							<td class="td1">Sosialisasi dan Diseminasi</td>
						</tr>
						<tr>
							<td class="td">01.05</td>
							<td class="td">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</td>
						</tr>
						<tr>
							<td class="td1">01.06</td>
							<td class="td1">Badan Koordinasi Hubungan Masyarakat</td>
						</tr>
						<tr>
							<td class="td">01.07</td>
							<td class="td">Umbul-Umbul</td>
						</tr>
						<tr>
							<td class="td1">HH 02</td>
							<td class="td1">Dokumentasi</td>
						</tr>
						<tr>
							<td class="td">02.01</td>
							<td class="td">Hasil Liputan (Media Cetak/Elektronik)</td>
						</tr>
						<tr>
							<td class="td1">02.02</td>
							<td class="td1">Guntingan Berita/Kliping</td>
						</tr>
						<tr>
							<td class="td">02.03</td>
							<td class="td">Analisa Media</td>
						</tr>
						<tr>
							<td class="td1">02.04</td>
							<td class="td1">Film</td>
						</tr>
						<tr>
							<td class="td">HH 03</td>
							<td class="td">Kepustakaan</td>
						</tr>
						<tr>
							<td class="td1">03.01</td>
							<td class="td1">Pengumpulan</td>
						</tr>
						<tr>
							<td class="td">03.02</td>
							<td class="td">Pengadaan</td>
						</tr>
						<tr>
							<td class="td1">03.03</td>
							<td class="td1">Pendistribusian</td>
						</tr>
						<tr>
							<td class="td">03.04</td>
							<td class="td">Pemanfaatan/Pelayanan</td>
						</tr>
						<tr>
							<td class="td1">03.05</td>
							<td class="td1">Pengolahan (Inventarisasi, Pengklasifikasian)</td>
						</tr>
						<tr>
							<td class="td">03.06</td>
							<td class="td">Pemeliharaan</td>
						</tr>
						<tr>
							<td class="td1">03.07</td>
							<td class="td1">Penyiangan</td>
						</tr>
						<tr>
							<td class="td">03.08</td>
							<td class="td">Pameran</td>
						</tr>
						<tr>
							<td class="td1">HH 04</td>
							<td class="td1">Penerbitan</td>
						</tr>
						<tr>
							<td class="td">04.01</td>
							<td class="td">Redaksi</td>
						</tr>
						<tr>
							<td class="td1">04.02</td>
							<td class="td1">Penulis</td>
						</tr>
						<tr>
							<td class="td">04.03</td>
							<td class="td">Naskah Asli</td>
						</tr>
						<tr>
							<td class="td1">04.04</td>
							<td class="td1">Master</td>
						</tr>
						<tr>
							<td class="td">04.05</td>
							<td class="td">Pencetakan</td>
						</tr>
						<tr>
							<td class="td1">04.06</td>
							<td class="td1">Distribusi</td>
						</tr>
						<tr>
							<td class="td">HH 05</td>
							<td class="td">Hubungan Lembaga dan Organisasi Masyarakat/Kerjasama Luar Negeri</td>
						</tr>
						<tr>
							<td class="td1">05.01</td>
							<td class="td1">Lembaga Tinggi Negara</td>
						</tr>
						<tr>
							<td class="td">05.02</td>
							<td class="td">Lembaga Pemerintah</td>
						</tr>
						<tr>
							<td class="td1">05.03</td>
							<td class="td1">Lembaga Swasta/Lembaga Swadaya Masyarakat</td>
						</tr>
						<tr>
							<td class="td">05.04</td>
							<td class="td">Perguruan Tinggi/Sekolah</td>
						</tr>
						<tr>
							<td class="td1">05.05</td>
							<td class="td1">Memorandum Of Understanding (MOU)</td>
						</tr>
						<tr>
							<td class="td">HH 06</td>
							<td class="td">Kerjasama Luar Negeri</td>
						</tr>
						<tr>
							<td class="td1">06.01</td>
							<td class="td1">Bilateral</td>
						</tr>
						<tr>
							<td class="td">06.02</td>
							<td class="td">Regional</td>
						</tr>
						<tr>
							<td class="td1">06.03</td>
							<td class="td1">Multilateral</td>
						</tr>
						<tr>
							<td class="td">06.04</td>
							<td class="td">Memorandum Of Understanding (MOU)</td>
						</tr>
						<tr>
							<td class="td1">HH 07</td>
							<td class="td1">Fasilitasi dan Pengaduan Masalah Hukum/Layanan Advokasi Hukum</td>
						</tr>
						<tr>
							<td class="td">07.01</td>
							<td class="td">Administrasi Litigasi/Non Litigasi</td>
						</tr>
						<tr>
							<td class="td1">07.02</td>
							<td class="td1">Bantuan Hukum</td>
						</tr>
						<tr>
							<td class="td">07.03</td>
							<td class="td">Pengaduan Masalah Hukum</td>
						</tr>
						<tr>
							<td class="td1">07.04</td>
							<td class="td1">Advokasi Hukum</td>
						</tr>
						<tr>
							<td class="td">07.05</td>
							<td class="td">Layanan Aspirasi dan Pengaduan Online Rakyat</td>
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