<?php

	include "config/connect.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css">
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/myJquery.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div id="head">
				<p>CRUD</p>
			</div>
			<table id="tableOne" border="1">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Angkatan</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php

					$a = 0;

					$query = mysql_query("SELECT * FROM mahasiswa");
					while ($hasil = mysql_fetch_array($query)) {						
						$id = $hasil['id'];
						$nim = strtoupper($hasil['nim']);
						$nama = strtoupper($hasil['nama']);
						$angkatan = $hasil['angkatan'];
						$a++;
				?>
				<tr>
					<td><?php echo $a; ?></td>
					<td><?php echo $nim; ?></td>
					<td><?php echo $nama; ?></td>
					<td><?php echo $angkatan; ?></td>
					<td class="iconTd iconEdit"><a href="edit.php?id=<?php echo $id; ?>"><img width="40%" src="img/edit.png" alt="edit" title="edit"></a></td>
					<td class="iconTd iconDel"><button class="<?php echo $id; ?>"><img width="40%" src="img/delete.png" alt="delete" title="delete"></button></td>
				</tr>
				<?php } ?>
			</table>
			<div id="tambah"><img id="cross" width="100%"src="img/cross.png" alt="tambah" title="Tambah"/></div>
			<form id="inputDb" action="insert.php" method="post">
				<table>
					<tr><td class="labelSign"><div class="label">Nama</div></td><td class="input"><input type="text" name="nama"/></td></tr>
					<tr><td class="labelSign"><div class="label">Nim</div></td><td class="input"><input type="text" name="nim"/></td></tr>
					<tr><td class="labelSign"><div class="label">Angkatan</div></td class="input"><td><input type="text" name="angkatan"/></td></tr>
					<tr><td colspan="2"><button type="reset" class="reset">Reset</button><button class="submit" type="submit">Submit</button></td></tr>
				</table>
			</form>
			<div id="ident">
				<div>Created by</div>
				<div>:: Damas ::</div>
				<div>M0512008</div>
			</div>
			<div id="wrapperDelete">
				<div class="backgroundOver"></div>
				<div id="deleteNotif">
					<div id="sure">Anda yakin ingin menghapus data ini ?</div>
					<div id="yesorno">
						<div id="no">Tidak</div>
						<div id="yes"><a id="yesA" href="#">Ya</a></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>