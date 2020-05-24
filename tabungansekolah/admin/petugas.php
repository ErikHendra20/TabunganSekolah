<h2>Data Petugas</h2>
<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tabungansekolah");

//ambil data dari tabel petugas

$result=mysqli_query ($koneksi, "SELECT *FROM petugas")

?>

<!DOCTYPE html>
<html>
<head>

    <title>Halaman Petugas</title>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Petugas</td>
        <td>Action</td>
        <td>Nama Petugas</td>
        <td>Alamat</td>
        <td>No Hp</td>
    </tr>
    <tr>
        <td>001</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Luh Ayu Dina Wulandari</td>
        <td>Singaraja</td>
        <td>085737626130</td>
        
    <tr>
        <td>002</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Kevin Whipalo Saputra</td>
        <td>Singaraja</td>
        <td>089626171174</td>
    </tr>
    </tr>
    </table>
</body>
</html>