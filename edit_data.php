<?php
	$nik=$_GET['id'];
	$nama=$_GET['nama'];
	$sandi=$_GET['sandi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Update Data</title>
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
        <form action="aksi_update.php" method="POST">
	<table border="1">
		<tr>
			<td>
				ID Pengguna
			</td>
			<td>
				<INPUT NAME="id_pengguna" TYPE="TEXT" PLACEHOLDER="id anda"  value="<?=$nik;?>" READONLY>
			</td>
		</tr>
		<tr>
			<td>
				Nama Pengguna
			</td>
			<td>
				<INPUT NAME="nama_pengguna" TYPE="TEXT" PLACEHOLDER ="nama anda">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="sandi_pengguna" TYPE="text" PLACEHOLDER ="sandi anda">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Rubah Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>