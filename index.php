<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
<center><big> <h2>Data Siswa</h2> </big></center>   
<br/>
<a href="form.php">Tambah Data</a>
	<form method="post" action="">
		<input type="text" name="cari" placeholder= "Ketikan Nama">
		<input type="submit" value="cari">
    </form>
<br/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <style>
  body {
   background-color: lightblue;
  }
</style>

</head>
<body>
   
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<table style="width: 100%;">
<colgroup>
   <tr style="background-color: blue;">
</colgroup>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Aksi</th>
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		if(isset($_POST['cari'])){
			$cari = $_POST ['cari'];
			$sql = mysqli_query($koneksi, "SELECT *FROM datasiswa WHERE nama LIKE '%$cari%'");
		} else {
			$sql = mysqli_query($koneksi, "SELECT *FROM datasiswa");
		}
		while ($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nis'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['jk'] ?></td>
				<td><?php echo $data['kelas'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['Nohp'] ?></td>
				<td> <a href="ubah.php?nis=<?= $data['nis']; ?>">Ubah</a> <a href="hapus.php?nis=<?= $data['nis']; ?>">Hapus</a></td>

			</tr>
			<?php } 
            ?>
	</table>

    
</body>
</html>