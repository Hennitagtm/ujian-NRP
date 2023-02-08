<!DOCTYPE html>
<html>
<head>
	<title>Halaman Lihat Pengguna</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body bgcolor="khaki">
	<center>
	<table  width="100%" border="3">
		<tr>
			
			<h1>SELAMAT DATANG DI KASIR ENI MART</h1>
		</tr>
		<tr>
			<td width="25%">
				<h3><center>MENU KIRI</center></h3>
					<ul>
						<li><h4>
							<a href="lihat_pengguna_ku.php">Lihat Pengguna</a>
						</h4></li>
						<li><h4>
							<a href="tambah_pengguna_ku.php">Tambah Pengguna</a>
						</h4></li>
						<li><h4>
							<a href="hapus_pengguna_ku.php">Hapus Pengguna</a>
						</h4></li>
						<li><h4>
							<a href="edit_pengguna_ku.php">Edit Pengguna</a>
						</h4></li>
					</ul>
			</td>
			<?php 
				include "konek_g.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
			<td>
				<h3><center>LIST PENGGUNA</center></h3>
			<table border="1" width="100%">
				<tr>
					<td><ul>No</ul></td>
					<td><ul>Nama Pengguna</ul></td>
					<td><ul>Sandi Pengguna<ul></td>
				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['id_pengguna'];
					echo"</td><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
				}
				?>
			</tr>
			</table>
			</td>
			</center>
		</tr>
	</table>
	</center>
</body>
</html>