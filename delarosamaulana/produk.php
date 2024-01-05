<!DOCTYPE html>
<html>
<head>
	<title>PRODUK WR PRODUCTION</title>
	<body bgcolor="grey">
</head>
<body>
 
	<center><h2>PRODUK WR PRODUCTION</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>DESCRIPTION</th>
			<th>SPECIFICATION</th>
			<th>QTY</th>
			<th>SATUAN</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from crud");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['description']; ?></td>
				<td><?php echo $d['specification']; ?></td>
				<td><?php echo $d['quantity']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		</center><?php 
		}
		?>
	</table>
</body>
</html>