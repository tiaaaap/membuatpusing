<!DOCTYPE html>
<html>
<head>

	<title><h1><big> DATA SISWA </big></h1></title>
</head>
<body>
   <?php
    include "koneksi.php";

    $nis=$_GET['nis'];
    $sql= mysqli_query($koneksi, "SELECT *FROM datasiswa WHERE nis='$nis'");
    $data = mysqli_fetch_array($sql);
   ?>

	<form method="post" action="">
    <center> <h1><big> DATA SISWA </big></h1></center>
		<label> NIS : </label>
		<input type="text" name="nis" placeholder="Masukan NIS" value="<?= $data['nis']?>"><br/><br>
		<label> Nama : </label>
		<input type="text" name="nama" placeholder="Masukan Nama" value="<?= $data['nama']?>"><br/><br>
		Jenis Kelamin :
		<input type="radio" name="jk" value="Laki-Laki" <?php if($data['jk']=="laki-laki"){echo "checked";}?>>Laki-Laki
		<input type="radio" name="jk" value="Perempuan"  <?php if($data['jk']=="perempuan"){echo "checked";}?>>Perempuan
        <br/><br>
		 Kelas :
		 <select name="kelas" size="1">
			<option value="XIIRPL1" <?php if($data['kelas']=="XIIRPL1"){echo "selected";}?>> XII RPL 1</option>
			<option value="XIIRPL2"<?php if($data['kelas']=="XIIRPL2"){echo "selected";}?>>XII RPL 2</option>
		</select>
        <br/><br>
		Alamat :
		<textarea name="alamat"><?= $data['alamat']?></textarea>
        <br/><br>
		No HP :
		<input type="text" name="Nohp" value="<?= $data['Nohp']?>" >
        <br/><br>
		<input type="submit" name="ubah" value="Ubah">
		
		

    <?php
         if(isset($_POST['ubah'])){
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $kelas = $_POST['kelas'];
            $alamat = $_POST['alamat'];
            $Nohp = $_POST['Nohp'];
            
            $sql = mysqli_query($koneksi, "UPDATE datasiswa SET nama='$nama', jk= '$jk', kelas='$kelas', alamat='$alamat', Nohp='$Nohp' WHERE nis='$nis'");

            if ($sql) {

                header("location:index.php");
            }
         }
?>
</body>
</html>
