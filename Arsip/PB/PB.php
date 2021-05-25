<!DOCTYPE html>
<html>
<head>
	<title>Info PB | BPHN</title>
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
			<h1 class="judul">PENGELOLAAN BARANG MILIK NEGARA</h1>
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
							<td class="td">PB</td>
							<td class="td">PENGELOLAAN BARANG MILIK NEGARA</td>
						</tr>
						<tr>
							<td class="td1">PB 01</td>
							<td class="td1">Perencanaan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Usulan Rencana Kebutuhan BMN</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Rencana Kebutuhan BMN Kementerian</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Hasil Analisis Kebutuhan BMN</td>
						</tr>
						<tr>
							<td class="td1">01.04</td>
							<td class="td1">Rencana Kebutuhan Aset Berwujud</td>
						</tr>
						<tr>
							<td class="td">01.05</td>
							<td class="td">Rencana Kebutuhan Aset Tak Berwujud</td>
						</tr>
						<tr>
							<td class="td1">PB 02</td>
							<td class="td1">Pengadaan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td">02.01</td>
							<td class="td">Pengadaan Barang Persediaan (habis pakai)</td>
						</tr>
						<tr>
							<td class="td1">02.02</td>
							<td class="td1">Pengadaan Barang Bukan Persediaan</td>
						</tr>
						<tr>
							<td class="td">02.03</td>
							<td class="td">Pengadaan Jasa Lainnya</td>
						</tr>
						<tr>
							<td class="td1">02.04</td>
							<td class="td1">Pengadaan Jasa Konsultasi</td>
						</tr>
						<tr>
							<td class="td">02.05</td>
							<td class="td">Pengadaan Aset Tetap (Tanah)</td>
						</tr>
						<tr>
							<td class="td1">02.06</td>
							<td class="td1">Pengadaan Aset Tidak Berwujud (Software)</td>
						</tr>
						<tr>
							<td class="td">02.07</td>
							<td class="td">Pengadaan Sewa</td>
						</tr>
						<tr>
							<td class="td1">02.08</td>
							<td class="td1">Pengadaan Modal Peralatan dan Mesin</td>
						</tr>
						<tr>
							<td class="td">02.09</td>
							<td class="td">Pekerjaan Konstruksi (Bangunan)</td>
						</tr>
						<tr>
							<td class="td1">02.10</td>
							<td class="td1">Unit Layanan Pengadaan (ULP)</td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td">- ULP Kementerian</td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1">- ULP Unit Eselon 1</td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td">ULP Kantor Wilayah</td>
						</tr>
						<tr>
							<td class="td1">PB 03</td>
							<td class="td1">Pendistribusian Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td">PB 04</td>
							<td class="td">Penetapan Status dan Pengamanan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td1">04.01</td>
							<td class="td1">Penggunaan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td">04.02</td>
							<td class="td">Pemanfaatan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td1">04.03</td>
							<td class="td1">Pengamanan dan Pemeliharaan</td>
						</tr>
						<tr>
							<td class="td">04.04</td>
							<td class="td">Rumah Negara</td>
						</tr>
						<tr>
							<td class="td1">04.05</td>
							<td class="td1">Surat Izin dan Surat Pembatalan Izin Penghunian Rumah Negara</td>
						</tr>
						<tr>
							<td class="td">PB 05</td>
							<td class="td">Penatausahaan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td1">05.01</td>
							<td class="td1">Pencatatan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td">05.02</td>
							<td class="td">Inventarisasi</td>
						</tr>
						<tr>
							<td class="td1">05.03</td>
							<td class="td1">Opname Fisik</td>
						</tr>
						<tr>
							<td class="td">05.04</td>
							<td class="td">Rekonsiliasi Data Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td1">05.05</td>
							<td class="td1">Konstruksi Dalam Pekerjaan (KDP)</td>
						</tr>
						<tr>
							<td class="td">05.06</td>
							<td class="td">Laporan Barang Milik Negara</td>
						</tr>
						<tr>
							<td class="td1">PB 06</td>
							<td class="td1">Pemindahtanganan dan Penghapusan</td>
						</tr>
						<tr>
							<td class="td">06.01</td>
							<td class="td">Penjualan</td>
						</tr>
						<tr>
							<td class="td1">06.02</td>
							<td class="td1">Tukar Menukar</td>
						</tr>
						<tr>
							<td class="td">06.03</td>
							<td class="td">Hibah</td>
						</tr>
						<tr>
							<td class="td1">06.04</td>
							<td class="td1">Penghapusan</td>
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