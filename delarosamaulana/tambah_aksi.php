<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$description = $_POST['description'];
$specification = $_POST['specification'];
$quantity = $_POST['quantity'];
$satuan = $_POST['satuan'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into crud values('','$description','$specification','$quantity','$satuan')");
 
// mengalihkan halaman kembali ke produk.php
header("location:produk.php");
 
?>