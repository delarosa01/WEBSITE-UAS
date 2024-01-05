<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA PRODUK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PRODUK</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>DESCRIPTION</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td>SPECIFICATION</td>
				<td><input type="text" name="specification"></td>
			</tr>
			<tr>
				<td>QTY</td>
				<td><input type="number" name="quantity"></td>
			</tr>
            <tr>			
				<td>SATUAN</td>
				<td><input type="text" name="satuan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>