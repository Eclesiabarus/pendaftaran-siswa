<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru | Politeknik STMI Jakarta</title>
</head>

	<body bg background="wall.jpg">
	<div style="text-align:center; margin:auto"><img src="univ.jpg" width="60%" height="50%"></div>
	<fieldset style="width: 60%; margin: auto;">
	 
	<center>
    <header>
        <h2>Mahasiswa yang sudah mendaftar</h2>
    </header>
    <nav>

    </nav>

    <br>
	<form method="POST">
	<table border='1' width='75%' cellpadding='2'  cellspacing='2' align='center' bgcolor=white>
		<tr>
         <a href="form-daftar.php">[+] Tambah Baru</a>
		</tr>
    <thead>
        <tr>
            <th>No ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</form>

    </body>
</html>