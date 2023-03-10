<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$Nohp = $_POST['Nohp'];

$sql = mysqli_query($koneksi, "INSERT INTO datasiswa VALUES('$nis','$nama','$jk', '$kelas','$alamat', '$Nohp')");

if ($sql)
    header("location:index.php")



?>