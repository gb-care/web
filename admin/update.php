<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_english = $_POST['id_english'];
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];
 
// update data ke database
mysqli_query($koneksi,"update english set judul='$judul', tag='$tag', content='$content' where id_english='$id_english'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>