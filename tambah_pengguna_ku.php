<!DOCTYPE html>
<html>
<head>
    <title>FORM TAMBAH DATA</title>
</head>

<body bgcolor="khaki">
    <table  width="100%" border="3">
        <tr>
            <h1>SELAMAT DATANG DI KASIR ENI MART</h1>
        </tr>
    <form action="untuk_tambah_data_pengguna.php" method="post">
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
            <table border="1" width="100%">
            </td>
            <td>ID Pengguna</td>
            <td>
                <input name="id_pengguna" type="TEXT" placeholder="id anda">
            </td>
        </tr>
        <tr>
            <td>Nama Pengguna</td>
            <td>
                <INPUT NAME="nama_pengguna" TYPE="TEXT" placeholder="nama anda">
            </td>
        </tr>
        <tr>
            <td>Password Pengguna</td>
            <td>
                <INPUT NAME="sandi_pengguna" TYPE="PASSWORD" placeholder="password anda">
            </td>
        </tr>
        <tr>
            <td>
            <center>
                <INPUT  TYPE="submit" value="SUBMIT">
            </center>
            </td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>