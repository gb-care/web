<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_tajwid = $_POST['id_tajwid'];
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];

// update data ke database
mysqli_query($koneksi,"update tajwid set judul='$judul', tag='$tag', content='$content' where id_tajwid='$id_tajwid'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>