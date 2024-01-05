<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="produk.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from crud where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>DESCRIPTION</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="description" value="<?php echo $d['description']; ?>">
					</td>
				</tr>
				<tr>
					<td>SPECIFICATION</td>
					<td><input type="text" name="specification" value="<?php echo $d['specification']; ?>"></td>
				</tr>
				<tr>
					<td>QTY</td>
					<td><input type="number" name="quantity" value="<?php echo $d['quantity']; ?>"></td>
				</tr>
                <tr>
					<td>SATUAN</td>
					<td><input type="text" name="satuan" value="<?php echo $d['satuan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>