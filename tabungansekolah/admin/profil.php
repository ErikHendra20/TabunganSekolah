<h2>Data Profil</h2>
<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tabungansekolah");

//ambil data dari tabel profil

$result=mysqli_query ($koneksi, "SELECT *FROM profil")

?>

<!DOCTYPE html>
<html>
<head>

    <title>Halaman Profil</title>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Profil</td>
        <td>Nama Sekolah</td>
        <td>Alamat Sekolah</td>
    </tr>
    <tr>
        <td>3001</td>
        <td>SMK NEGERI 1 GEROKGAKi</td>
        <td>Jln.Seririt Gilimanuk Desa Banyupoh</td>
    </tr>
    </table>
</body>
</html>