<!DOCTYPE html>
<html>
<head>
	<title>Info KP | BPHN</title>
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
			<h1 class="judul">KEPEGAWAIAN</h1>
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
							<td class="td">KP</td>
							<td class="td">KEPEGAWAIAN</td>
						</tr>
						<tr>
							<td class="td1">KP 01</td>
							<td class="td1">Formasi Pegawai</td>
						</tr>
						<tr>
							<td class="td">01.01</td>
							<td class="td">Inventarisasi Jabatan/Peta Jabatan</td>
						</tr>
						<tr>
							<td class="td1">01.02</td>
							<td class="td1">Evaluasi Jabatan</td>
						</tr>
						<tr>
							<td class="td">01.03</td>
							<td class="td">Usulan Formasi</td>
						</tr>
						<tr>
							<td class="td1">01.04</td>
							<td class="td1">Alokasi Formasi</td>
						</tr>
						<tr>
							<td class="td">KP 02</td>
							<td class="td">Penerimaan/Pengadaan Pegawai</td>
						</tr>
						<tr>
							<td class="td1">02.01</td>
							<td class="td1">Proses Penerimaan Pegawai</td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td">- Seleksi Pegawai</td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1">- Penetapan Kelulusan</td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td">- Pengumuman Kelulusan</td>
						</tr>
						<tr>
							<td class="td1">02.02</td>
							<td class="td1">Berkas Lamaran Yang Tidak Diterima</td>
						</tr>
						<tr>
							<td class="td">02.03</td>
							<td class="td">Surat Keputusan CPNS/PNS Kolektif</td>
						</tr>
						<tr>
							<td class="td1">02.04</td>
							<td class="td1">Politeknik Ilmu Pemasyarakatan dan AIM</td>
						</tr>
						<tr>
							<td class="td">KP 03</td>
							<td class="td">Pengangkatan Pegawai</td>
						</tr>
						<tr>
							<td class="td1">03.01</td>
							<td class="td1">Pengangkatan CPNS</td>
						</tr>
						<tr>
							<td class="td">03.02</td>
							<td class="td">Pengangkatan PNS</td>
						</tr>
						<tr>
							<td class="td1">03.03</td>
							<td class="td1">Pengangkatan Jabatan Struktural</td>
						</tr>
						<tr>
							<td class="td">03.04</td>
							<td class="td">Pengangkatan Jabatan Fungsional</td>
						</tr>
						<tr>
							<td class="td1">KP 04</td>
							<td class="td1">Mutasi Pegawai</td>
						</tr>
						<tr>
							<td class="td">04.01</td>
							<td class="td">Alih Tugas/Diperbantukan/Dipekerjakan/Pelaksana</td>
						</tr>
						<tr>
							<td class="td1">04.02</td>
							<td class="td1">Pelaksana Harian/Pelaksana Tugas</td>
						</tr>
						<tr>
							<td class="td">04.03</td>
							<td class="td">Mutasi Keluarga (Nikah, Anak, Cerai, dan Kematian)</td>
						</tr>
						<tr>
							<td class="td1">04.04</td>
							<td class="td1">Kenaikan Gaji Berkala (KGB)</td>
						</tr>
						<tr>
							<td class="td">04.05</td>
							<td class="td">Kenaikan Pangkat/Golongan</td>
						</tr>
						<tr>
							<td class="td1">04.06</td>
							<td class="td1">Peninjauan Masa Kerja</td>
						</tr>
						<tr>
							<td class="td">04.07</td>
							<td class="td">Berkas Badan Pertimbangan Jabatan dan Kepangkatan (Baperjakat)</td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
						</tr>
						<tr>
							<td class="td"></td>
							<td class="td"></td>
						</tr>
						<tr>
							<td class="td1"></td>
							<td class="td1"></td>
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