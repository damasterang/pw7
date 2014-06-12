<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
	</head>
	<body>
		
	<?php

		include 'config/connect.php';

		// if (isset($_POST['submit'])) {
			
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			$angkatan = $_POST['angkatan'];

			$query = "INSERT INTO mahasiswa (nama, nim, angkatan) VALUES ('$nama', '$nim', '$angkatan')";

			$sql = mysql_query($query);

			echo "<div>Data berhasil dimasukan</div>";

			header("location: http://localhost/pemrogramanWeb/PW7_M0512008/index.php");

		// }

	?>

	</body>
</html>
