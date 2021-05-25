<!DOCTYPE html>
<html>
<head>
	<title>Info PR | BPHN</title>
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
			<h1 class="judul">PERENCANAAN</h1>
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
							<td class="td">PR</td>
							<td class="td">PERENCANAAN</td>
						</tr>
						<tr>
							<td class="td1">PR 01</td>
							<td class="td1">Program dan Anggaran</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Rencana Strategis</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Trilateral Meeting</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Rencana Kerja</td>
						</tr>
						<tr>
							<td class="td1">01.04</td>
							<td class="td1">Rencana Kerja dan Anggaran</td>
						</tr>
						<tr>
							<td class="td">PR 02</td>
							<td class="td">Evaluasi</td>
						</tr>
						<tr>
							<td class="td1">02.01</td>
							<td class="td1">Unit Utama</td>
						</tr>
						<tr>
							<td class="td">02.02</td>
							<td class="td">Kantor Wilayah</td>
						</tr>
						<tr>
							<td class="td1">PR 03</td>
							<td class="td1">Laporan Akuntabilitas Kinerja Instansi</td>
						</tr>
						<tr>
							<td class="td">PR 04</td>
							<td class="td">Pelaporan</td>
						</tr>
						<tr>
							<td class="td1">04.01</td>
							<td class="td1">Laporan Bulanan</td>
						</tr>
						<tr>
							<td class="td">04.02</td>
							<td class="td">Laporan Triwulan</td>
						</tr>
						<tr>
							<td class="td1">04.03</td>
							<td class="td1">Laporan Semester</td>
						</tr>
						<tr>
							<td class="td">04.04</td>
							<td class="td">Tahunan</td>
						</tr>
						<tr>
							<td class="td1">04.05</td>
							<td class="td1">Insidentil</td>
						</tr>
						<tr>
							<td class="td">PR 05</td>
							<td class="td">Rapat Kerja</td>
						</tr>
						<tr>
							<td class="td1">05.01</td>
							<td class="td1">Dengan DPR</td>
						</tr>
						<tr>
							<td class="td">05.02</td>
							<td class="td">Tingkat Kementrian</td>
						</tr>
						<tr>
							<td class="td1">05.03</td>
							<td class="td1">Tingkat Unit Utama (RAKERNIS)</td>
						</tr>
						<tr>
							<td class="td">05.04</td>
							<td class="td">Tingkat Kantor Wilayah</td>
						</tr>
						<tr>
							<td class="td1">05.05</td>
							<td class="td1">Rapat Pimpinan dan Rapat Staf</td>
						</tr>
						<tr>
							<td class="td">PR 06</td>
							<td class="td">Sidang Kabinet</td>
						</tr>
						<tr>
							<td class="td1">06.01</td>
							<td class="td1">Sidang Kabinet Terbatas</td>
						</tr>
						<tr>
							<td class="td">06.02</td>
							<td class="td">Sidang Kabinet Paripurna</td>
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