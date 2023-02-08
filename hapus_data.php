<?php 
$id=$_GET['hapus'];
include "konek_g.php";
mysqli_query($konek,'DELETE FROM tb_pengguna WHERE id_pengguna="'.$id.'"');
header("location:hapus_pengguna_ku.php");