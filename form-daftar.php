<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Mahasisiswa Baru | Politeknik STMI Jakarta</title>
</head>
    <header>
        <center><h1>Formulir Pendaftaran Siswa Baru</h1></center>
    </header>
	<body bg background="wall.jpg">
	<div style="text-align:center; margin:auto"><img src="univ.jpg" width="60%" height="50%"></div>
	<fieldset style="width: 60%; margin: auto;">
	<center>
      <form action="proses-pendaftaran.php" method="POST">   
        <p>
		<table>
		<tr>
            <td><label for="nama">Nama: </label><td>
            <input type="text" name="nama" placeholder="nama lengkap" />
		</tr> </p>
		<p>
		<tr>
        
            <td><label for="alamat">Alamat: </label></td>
            <td><textarea name="alamat"></textarea><td>
		</tr></p>
		<tr>
        <p>
            <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
            <td><label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label></td>
            <td><label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label></td>
        </tr></p>
		<tr>
        <p>
            <td><label for="agama">Agama: </label></td>
            <td><select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select></td>
        </p>
		</tr>
		<tr>
        <p>
            <td><label for="sekolah_asal">Sekolah Asal: </label></td>
            <td><input type="text" name="sekolah_asal" placeholder="nama sekolah" /></td>
			</table>
        </p>
		</tr>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
		</center>
		</fieldset>
	</form>
    </body>
</html>