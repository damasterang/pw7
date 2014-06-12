<?php

	include 'config/connect.php';

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$sql = "DELETE FROM mahasiswa WHERE id = '$id'";

		$query = mysql_query($sql);
		
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	</head>
	<body>
		<div id="wrapperDel">
			<div id="successNotif">Data berhasil dihapus</div>
			<div id="backLink">
				<a href="index.php">Lihat Data</a>
			</div>
		</div>
		<div id="ident">
			<div>Created by</div>
			<div>:: Damas ::</div>
			<div>M0512008</div>
		</div>
	</body>
</html>