<?php
	$nik=$_GET['id'];
	$nama=$_GET['nama'];
	$sandi=$_GET['sandi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data</title>
</head>
<body bgcolor="khaki">
    <center>
    <table  width="100%" border="3">
        <tr>
            <h1>SELAMAT DATANG DI KASIR ENI MART</h1>
        </tr>
	<form action="aksi_update.php" method="POST">
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

             <td>
                <h3><center>LIST PENGGUNA</center></h3>
                <?php
                include "konek_g.php";
                $kueri=mysqli_query($konek,'SELECT*FROM tb_pengguna');
                ?>
            <table border="1" width="100%">
            </td>
            <td>
            	<b>ID Pengguna</b>
            </td>
            <td>
            <b>Nama Pengguna</b>
        	</td>
            <td>
            	<b>Password Pengguna</b>
            </td>
            <td>
            	<b>Aksi</b>
            </td>
        </tr>
		
		  <?php
        while($row = mysqli_fetch_array($kueri)){
       	echo"<tr><td>";
		echo $row['id_pengguna'];
		echo"</td><td>";
		echo $row['nama_pengguna'];
		echo"</td><td>";
		echo $row['sandi_pengguna'];
		echo"</td>
		<td>";
		echo"&nbsp&nbsp&nbsp
		<a href='edit_pengguna_ku.php?id=".$row['id_pengguna']."&nama=".$row['nama_pengguna']."&sandi=".$row['password_pengguna']."	'>edit</a>";
		}
		?>
    </table>

</table>
    </center>
</body>
</html>
