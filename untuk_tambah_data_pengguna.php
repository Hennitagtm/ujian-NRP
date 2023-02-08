<?php
include "konek_g.php";
$id=$_POST['id_pengguna'];
$pengguna=$_POST["nama_pengguna"];
$password=$_POST["sandi_pengguna"];
$kueri=mysqli_query($konek,"INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$pengguna."','".$password."')");
if($kueri){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna_ku.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:tambah_pengguna_ku.php");	
}