<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>

    <form method="post" action="simpan.php">
    <center> <h1><big> DATA SISWA </big></h1></center>
   
        <label>NIS</label> : <input type="text" name="nis"> <br> <br>
        <label>Nama</label> : <input type="text" name="nama"> <br> <br>
        <label>Jenis Kelamin </label> : <input type="radio" name="jk" value="laki-laki" > Laki-Laki
        <input type="radio" name="jk" value="perempuan">Perempuan <br> <br>
        <label>Kelas</label> : <select name="kelas">
            <option value="XII RPL 1"> XII RPL 1</option>
            <option value="XII RPL 2"> XII RPL 2</option>
</select><br><br>
        <label> Alamat</label> : <textarea name="alamat"></textarea><br><br>
        <label>No Hp</label> : <input type="tex" name="Nohp"><br><br>
        <input type="submit" value="Simpan">
        <input type="submit" name="ubah" value="Ubah">
        <input type="submit" name="hapus" value="Hapus">



</form>
</body>
</html>