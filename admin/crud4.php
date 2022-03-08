<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = time();
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tajwid values('$id','$judul','$tag','$content')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>