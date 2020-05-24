<h2>Data Siswa</h2>

<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","tabungansekolah");

//ambil data dari tabel siswa

$result=mysqli_query ($koneksi, "SELECT *FROM siswa")

?>

<!DOCTYPE html>
<html>
<head>

    <title>Halaman data siswa</title>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Nis Siswa</td>
        <td>Action</td>
        <td>Nama Siswa</td>
        <td>Nama Kelas</td>
        <td>Jenis kelamin</td>
        <td>AlamatSiswa</td>
        <td>Ruangan Kelas</td>
    </tr>
    <tr>
        <td>123456004</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Putu Sariani</td>
        <td>IPA 1</td>
        <td>Perempuan</td>
        <td>Desa Patas</td>
        <td>01</td>
        
    <tr>
        <td>123456011</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Komang Owen Prastiawan</td>
        <td>IPA 1</td>
        <td>Laki_laki</td>
        <td>Desa Penyabangan</td>
        <td>01</td>

    <tr>
        <td>123456016</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Luh Ayu Gladis tiya</td>
        <td>IPA 1</td>
        <td>Perempuan</td>
        <td>Desa Banyupoh</td>
        <td>01</td>

    <tr>
        <td>123456017</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Putu Sriani</td>
        <td>IPA 1</td>
        <td>Perempuan</td>
        <td>Desa Penyabangan</td>
        <td>01</td>

    <tr>
        <td>123456020</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Gede Agus Skadana</td>
        <td>IPA 1</td>
        <td>Laki_laki</td>
        <td>Desa Sanggalangit</td>
        <td>01</td>    

    <tr>
        <td>123456023</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Kadek Deni Sastrawan</td>
        <td>IPA 1</td>
        <td>Laki_laki</td>
        <td>Desa Pemuteran</td>
        <td>01</td>

    <tr>
        <td>123456025</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Kadek Aguas Suardiasa Putra</td>
        <td>IPA 1</td>
        <td>Laki_laki</td>
        <td>Desa Banyupoh</td>
        <td>01</td>

    <tr>
        <td>123456780</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Ketut Siska Yanti</td>
        <td>IPA 1</td>
        <td>Perempuan</td>
        <td>Desa Penyabangan</td>
        <td>01</td>

    <tr>
        <td>123457601</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Gung Indra</td>
        <td>IPA 2</td>
        <td>Laki_laki</td>
        <td>Desa Penyabangan</td>
        <td>02</td>

    <tr>
        <td>123457602</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Erick Santoso</td>
        <td>IPA 2</td>
        <td>Laki_laki</td>
        <td>Desa Penyabangan</td>
        <td>02</td>
        
    <tr>
        <td>123457603</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Mike Wazowski</td>
        <td>IPA 2</td>
        <td>Laki_laki</td>
        <td>Desa Banyupoh</td>
        <td>02</td>
        
    <tr>
        <td>123457604</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Michael Rama</td>
        <td>IPA 2</td>
        <td>Laki_laki</td>
        <td>Desa Banyupoh</td>
        <td>02</td>
        
    <tr>
        <td>123457605</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Ni Luh Ashley</td>
        <td>IPA 2</td>
        <td>Perempuan</td>
        <td>Desa Penyabangan</td>
        <td>02</td>
        
    <tr>
        <td>123457606</td>
        <td>
            <a href="">edit</a>
            <a href="">delete</a>
        </td>
        <td>Ni Luh Angel</td>
        <td>IPA 2</td>
        <td>Perempuan</td>
        <td>Desa Penyabangan</td>
        <td>02</td>
          
    <tr>
    <tr>
    <tr>
    <tr>
    <tr>
    <tr>    
    <tr>    
    <tr>
    <tr>
    <tr>  
    <tr>     
    <tr>
    </tr>
    </tr>
    </table>
</body>
</html>