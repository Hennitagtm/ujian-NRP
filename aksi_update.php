<?php 
include "konek_g.php";
$id=$_POST['id_pengguna'];
$nama=$_POST['nama_pengguna'];
$password=$_POST['sandi_pengguna'];
if(empty($nama)&&empty($password)){
	echo "<script language='javascript'>alert('Maaf Tidak Ada Perubahan Data')
		window.location.href='lihat_pengguna_ku.php'
	</script>";
}else if(empty($nama)){
	mysqli_query($konek,"UPDATE tb_pengguna SET sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'" );
	header("location:lihat_pengguna_ku.php");
}else if (empty($password)) {
	mysqli_query($konek,"UPDATE tb_pengguna SET sandi_pengguna='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna_ku.php");
}
else{
	mysqli_query($konek,"UPDATE tb_pengguna SET nama_pengguna='".$nama."',sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna_g.php");
}