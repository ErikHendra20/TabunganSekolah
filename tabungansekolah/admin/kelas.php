<h2>Data Kelas</h2>
<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tabungansekolah");

//ambil data dari tabel kelas

$result=mysqli_query ($koneksi, "SELECT *FROM kelas")

?>

<!DOCTYPE html>
<html>
<head>

    <title>Halaman kelas</title>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Ruangan Kelas</td>
        <td>Kelas</td>
    </tr>
    <tr>
        <td>01</td>
        <td>IPA 1</td>

    <tr>
        <td>02</td>
        <td>IPA 2</td>
    </tr>
    </tr>
    </table>
</body>
</html>