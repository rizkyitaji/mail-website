<!DOCTYPE html>
<html>
<head>
	<title>Info UM | BPHN</title>
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
			<h1 class="judul">UMUM</h1>
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
							<td class="td">UM</td>
							<td class="td">UMUM</td>
						</tr>
						<tr>
							<td class="td1">UM 01</td>
							<td class="td1">Ketatausahaan</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Persuratan</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Penggandaan dan Pencetakan</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Ucapan dan Terima Kasih/Ucapan Selamat</td>
						</tr>
						<tr>
							<td class="td1">UM 02</td>
							<td class="td1">Kearsipan</td>
						</tr>
						<tr>
							<td class="td">02.01</td>
							<td class="td">Pemindahan Arsip</td>
						</tr>
						<tr>
							<td class="td1">02.02</td>
							<td class="td1">Pemusnahan Arsip</td>
						</tr>
						<tr>
							<td class="td">02.03</td>
							<td class="td">Penyerahan</td>
						</tr>
						<tr>
							<td class="td1">02.04</td>
							<td class="td1">Layanan Kearsipan</td>
						</tr>
						<tr>
							<td class="td">02.05</td>
							<td class="td">Pembinaan Kearsipan</td>
						</tr>
						<tr>
							<td class="td1">UM 03</td>
							<td class="td1">Kerumahtanggaan</td>
						</tr>
						<tr>
							<td class="td">03.01</td>
							<td class="td">Penggunaan dan Pemeliharaan Ruang dan Peralatan Kantor</td>
						</tr>
						<tr>
							<td class="td1">03.02</td>
							<td class="td1">Penggunaan dan Pemeliharaan Rumah Negara</td>
						</tr>
						<tr>
							<td class="td">03.03</td>
							<td class="td">Penggunaan dan Pemeliharaan Kendaraan Dinas</td>
						</tr>
						<tr>
							<td class="td1">03.04</td>
							<td class="td1">Penggunaan dan Pemeliharaan Fasilitas</td>
						</tr>
						<tr>
							<td class="td">03.05</td>
							<td class="td">Penggunaan dan Pemeliharaan Barang Elektronik serta Mesin</td>
						</tr>
						<tr>
							<td class="td1">03.06</td>
							<td class="td1">Penggunaan dan Pemeliharaan Gedung serta Area Kantor</td>
						</tr>
						<tr>
							<td class="td">03.07</td>
							<td class="td">Pemeliharaan Alat Kesehatan</td>
						</tr>
						<tr>
							<td class="td1">03.08</td>
							<td class="td1">Perjalanan Dinas (Dalam Negeri/Luar Negeri)</td>
						</tr>
						<tr>
							<td class="td">03.09</td>
							<td class="td">Penghematan Energi</td>
						</tr>
						<tr>
							<td class="td1">UM 04</td>
							<td class="td1">Keprotokolan</td>
						</tr>
						<tr>
							<td class="td">04.01</td>
							<td class="td">Penyelenggaraan Upacara</td>
						</tr>
						<tr>
							<td class="td1">04.02</td>
							<td class="td1">Pelayanan Tamu, Acara Kedinasan, Jamuan dan Ramah Tanah</td>
						</tr>
						<tr>
							<td class="td">04.03</td>
							<td class="td">Daftar Nama Pejabat dan Alamat</td>
						</tr>
						<tr>
							<td class="td1">HH 05</td>
							<td class="td1">Pengamanan</td>
						</tr>
						<tr>
							<td class="td">05.01</td>
							<td class="td">Pengamanan Personil</td>
						</tr>
						<tr>
							<td class="td1">05.02</td>
							<td class="td1">Pengamanan Lingkungan, Fisik dan Instalasi</td>
						</tr>
						<tr>
							<td class="td">05.03</td>
							<td class="td">Pengamanan Dokumen dan Informasi Rahasia</td>
						</tr>
						<tr>
							<td class="td1">05.04</td>
							<td class="td1">Laporan Keamanan</td>
						</tr>
						<tr>
							<td class="td">05.05</td>
							<td class="td">Laporan Kejadian</td>
						</tr>
						<tr>
							<td class="td1">05.06</td>
							<td class="td1">Bantuan Pengamanan</td>
						</tr>
						<tr>
							<td class="td">UM 06</td>
							<td class="td">Pembinaan Sikap dan Mental</td>
						</tr>
						<tr>
							<td class="td1">06.01</td>
							<td class="td1">Perayaan Hari Besar Nasional dan Hari Bhakti di Lingkungan Kemenkum HAM</td>
						</tr>
						<tr>
							<td class="td">06.02</td>
							<td class="td">Pelayanan Sosial dan Keagamaan</td>
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