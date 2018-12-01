<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UT-8">
	<title>Pendaftaran Mahasiswa Baru | Politeknik STMI Jakarta</title>
	<link rel="stylesheet"
	href="style.css">
</head>
<body>
<div class="form-area">
	<center>
		<h3>Pendaftaran Mahasiswa Baru Politeknik STMI Jakarta</h3>
		<br>
			</br>
		<img src="Logo.jpg" height = "200" width = "200"/>
		<br>
			</br>
	</center>
	<br>
			</br>
			<a href="form-daftar.php"><div class="tombol" /><center>Daftar Baru</center></div></a>
			<br>
			</br>
			<a href="list-siswa.php"><div class="tombol" /><center>List Pendaftar</center></div></a>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>