<!DOCTYPE html>
<html>
<head>
	<title>Mail-UM | BPHN</title>
	<link rel="stylesheet" type="text/css" href="../../page.css">
</head>
<body>
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../../login.php?pesan=belum_login");
  }

    include '../../koneksi.php'; 
    $query = mysqli_query($koneksi,"SELECT * FROM UM");
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
			<h1 class="judul">UMUM (UM)</h1>
			<form action="input-um.php">
				<table>
					<td><input class="input" type="submit" value="INPUT SURAT"></td>
				</table>
			</form>
			<table class="show" border="1" width="100%">
				<thead>
					<tr>
						<th>NO</th>
						<th>Tanggal</th>
						<th>Perihal</th>
						<th>Asal Surat</th>
						<th>No. Urut</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php if(mysqli_num_rows($query)) { ?>
					<?php while($row = mysqli_fetch_array($query)) { ?>
					<tr>
						<td class="td"><?php echo $no; $no++; ?></td>
						<td class="td"><?php echo $row['Tanggal']?></td>
						<td class="td"><?php echo $row['Perihal']?></td>
						<td class="td"><?php echo $row['Asal_Surat']?></td>
						<td class="td"><?php echo $row['No_Urut']?></td>
						<?php
						$Tanggal = $row[1];
						$Perihal = $row[2];

						print("<td><a class=\"hapus\" href=\"hapus-hh.php?kode=$Perihal\"onClick = \"return confirm('Surat $Perihal dihapus?')\">Hapus</a></td>");
		 				?>
					</tr>
					<?php } ?>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<div class="footer">
			<p class="copy">Copyright &copy; 2019 Rizky-Putra-Itaji</p>
		</div>
	</div>

</body>
</html>