<?php 

include 'koneksi.php';

$nis = $_GET['nis'];

$sql = mysqli_query($koneksi, "DELETE FROM  datasiswa WHERE nis='$nis'");

if($sql){
header("location:index.php");
}
 
?>