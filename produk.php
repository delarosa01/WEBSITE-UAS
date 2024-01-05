<!DOCTYPE html>
<html>
<head>
	<title>PRODUK WR PRODUCTION</title>
	<body bgcolor="silver">
</head>
<body>
 
	<center><h2>PRODUK WR PRODUCTION</center></h2>
	<center><h3>SOUND SYSTEM, LIGHTING, AND ALL PRODUCTION</center></h3>
	<br/>
	<br/>
	<br/>
	<center><table border="1">
		<tr>
			<th>NO</th>
			<th>DESCRIPTION</th>
			<th>SPECIFICATION</th>
			<th>QTY</th>
			<th>SATUAN</th>
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
				
			</tr>
			<?php 
		}
		?>
	</center></table>
</body>
</html>