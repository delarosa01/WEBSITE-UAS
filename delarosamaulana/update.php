<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$description = $_POST['description'];
$specification = $_POST['specification'];
$quantity = $_POST['quantity'];
$satuan = $_POST['satuan'];

 
// update data ke database
mysqli_query($koneksi,"update crud set description='$description', specification='$specification', quantity='$quantity', satuan='$satuan' where id='$id'");
 
// mengalihkan halaman kembali ke produk.php
header("location:produk.php");
 
?>