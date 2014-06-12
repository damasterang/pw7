<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css">
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/myJquery.js"></script>
	</head>
	<body>

<?php

	include 'config/connect.php';

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$sql = "SELECT * FROM mahasiswa WHERE id='$id'";
		$query = mysql_query($sql);
		while ($hasil = mysql_fetch_array($query)) {
			
			$nama = $hasil['nama'];
			$nim = $hasil['nim'];
			$angkatan = $hasil['angkatan'];
?>

		<div class="wrapper">
			<div id="head">
				<p>CRUD</p>
				<a id="backArrow" href="index.php"><</a>
			</div>
			<form class="edit" id="inputDb2" action="edit.php" method="post">
				<table>
					<tr style="display:none"><td><input type="text" name="id" value="<?php echo $id; ?>"></td></tr>
					<tr><td class="labelSign"><div class="label">Nama</div></td><td class="input"><input type="text" name="nama" value="<?php echo $nama; ?>"/></td></tr>
					<tr><td class="labelSign"><div class="label">Nim</div></td><td class="input"><input type="text" name="nim" value="<?php echo $nim; ?>" /></td></tr>
					<tr><td class="labelSign"><div class="label">Angkatan</div></td class="input"><td><input type="text" name="angkatan" value="<?php echo $angkatan; ?>"/></td></tr>
					<tr><td colspan="2"><button class="submit" type="submit" name="submit">Edit</button></td></tr>
				</table>
			</form>
		</div>

<?php
		}

	}

	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$angkatan = $_POST['angkatan'];

		$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', angkatan='$angkatan' WHERE id='$id'";

		$query = mysql_query($sql);
?>

		<div id="wrapperDel">
			<div id="successNotif">Data berhasil diedit</div>
			<div id="backLink">
				<a href="index.php">Lihat Data</a>
			</div>
		</div>

<?php
	}

?>
		<div id="ident">
			<div>Created by</div>
			<div>:: Damas ::</div>
			<div>M0512008</div>
		</div>
	</body>
</html>