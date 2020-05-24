<h2>Data Tabungan</h2>
<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tabungansekolah");

//ambil data dari tabel petugas

$result=mysqli_query ($koneksi, "SELECT *FROM tabungan")

?>

<!DOCTYPE html>
<html>
<head>

    <title>Halaman Tabungan</title>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Kode Tabungan</td>
        <td>Action</td>
        <td>Nama Siswa</td>
        <td>Nama Kelas</td>
        <td>Jumlah Tabungan</td>
        <td>Tanggal</td>
        <td>Nis Siswa</td>
    </tr>
    <tr>
        <td>4001</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Putu Sariani</td>
        <td>IPA 1</td>
        <td>Rp.700.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456004</td>
        
    <tr>
        <td>4002</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Komang Owen Prastiawan</td>
        <td>IPA 1</td>
        <td>Rp.650.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456011</td>
        
     <tr>
        <td>4003</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Luh Ayu Gladis Tiya</td>
        <td>IPA 1</td>
        <td>Rp.780.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456016</td>
        
    <tr>
        <td>4004</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Putu Sriani</td>
        <td>IPA 1</td>
        <td>Rp.550.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456017</td>
        
    <tr>
        <td>4005</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Gede Agus Skadana</td>
        <td>IPA 1</td>
        <td>Rp.400.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456020</td>
        
    <tr>
        <td>4006</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Kadek Deni Sastrawan</td>
        <td>IPA 1</td>
        <td>Rp.1.000.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456023</td>
        
    <tr>
        <td>4007</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Kadek Agus Suardiasa Putra</td>
        <td>IPA 1</td>
        <td>Rp.800.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456025</td>
        
    <tr>
        <td>4008</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Ketut Siska Yanti</td>
        <td>IPA 1</td>
        <td>Rp.800.000,00</td>
        <td>09 Mei 2020</td>
        <td>123456780</td>

    <tr>
        <td>4009</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Gung Indra</td>
        <td>IPA 2</td>
        <td>Rp.800.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457601</td>
        
    <tr>
        <td>40010</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Erick Santoso</td>
        <td>IPA 2</td>
        <td>Rp.850.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457602</td>

    <tr>
        <td>40011</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Mike Wazowski</td>
        <td>IPA 2</td>
        <td>Rp.600.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457603</td>
        
    <tr>
        <td>40012</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Michael Rama</td>
        <td>IPA 2</td>
        <td>Rp.950.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457604</td>
        
    <tr>
        <td>40013</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Ni Luh Ashley</td>
        <td>IPA 2</td>
        <td>Rp.800.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457605</td>
        
        <tr>
        <td>40014</td>
        <td>
            <a href="">update</a>
        </td>
        <td>Ni Putu Angel</td>
        <td>IPA 2</td>
        <td>Rp.600.000,00</td>
        <td>09 Mei 2020</td>
        <td>123457606</td>
        
    </tr>
    </tr>
    </tr>
    </tr>   
    </tr>
    </tr>
    </tr>
    </tr>
    </tr>
    </tr>
    </tr>
    </tr>
    </table>
</body>
</html>