<!DOCTYPE html>
<html>
<head>
	<title>WEB ADMIN</title>
	<body bgcolor="black">
</head>
<body>
	<font color="white"font size=6><center><h2>INFORMASI SELENGKAPNYA </font></center></h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
 <font color="white" font size=5><center><h4>Selamat datang! Anda telah login.</font></center></h4>
 
	<br/>
	<br/>
    <font color="white"size="5">Menu</font>
<font color="white" size="5">
<ul type="square">
    <li><a href="home.php" target="kanan">Home</a></li>
    <li><a href="produk.php" target="kanan">Produk</a></li>
    <li><a href="profile.php" target="kanan">Profile</a></li>
    <li><a href="logout.php" target="kanan">Logout</a></li>
</ul></font>

</body>
</html>